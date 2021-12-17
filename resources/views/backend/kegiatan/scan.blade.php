@extends('backend.main')
@section('head')

@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body">
                <div id="desktop">
                  <center>
                    <div id="loadingMessage">
                      🎥 Unable to access video stream (please make sure you have a webcam enabled)
                    </div>
                    <canvas id="canvas" hidden style="width: 100%"></canvas>
                      <div id="output" hidden>
                        <div id="outputMessage">No QR code detected.</div>
                        <div hidden><b>Data:</b> <span id="outputData"></span></div>
                        <input type="hidden" name="code_qr" id="code_qr">
                      </div>
                      <br />
                    <div class="row">
                      <div class="col-md-6">
                        <button id="retry_video" class="btn btn-sm btn-block mb-3">Retry Scan</button>
                      </div>
                      <div class="col-md-6">
                        <button type="button" id="btn_refresh" class="btn btn-sm btn-block mb-3">Proses</button>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
        </div>
    </div>

    <!-- End XP Col -->

</div>
@endsection

@section('script')
  <script src="{{ url('QR/endpoint/js/jsQR.js') }}"></script>
  {{-- <script src="{{ url('assets/backend/modules/sweetalert/sweetalert.min.js') }}"></script> --}}
  <script>
    var video = document.createElement("video");
    var canvasElement = document.getElementById("canvas");
    var canvas = canvasElement.getContext("2d");
    var loadingMessage = document.getElementById("loadingMessage");
    var outputContainer = document.getElementById("output");
    var outputMessage = document.getElementById("outputMessage");
    var outputData = document.getElementById("outputData");
    var codeFound = false;

    function drawLine(begin, end, color) {
      canvas.beginPath();
      canvas.moveTo(begin.x, begin.y);
      canvas.lineTo(end.x, end.y);
      canvas.lineWidth = 4;
      canvas.strokeStyle = color;
      canvas.stroke();
    }

    // Use facingMode: environment to attemt to get the front camera on phones
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } }).then(function(stream) {
      video.srcObject = stream;
      video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
      video.play();
      requestAnimationFrame(tick);
    });

    function tick() {
      loadingMessage.innerText = "⌛ Loading video..."
      if (video.readyState === video.HAVE_ENOUGH_DATA && !codeFound) {
        loadingMessage.hidden = true;
        canvasElement.hidden = false;
        outputContainer.hidden = false;

        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
        var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
        var code = jsQR(imageData.data, imageData.width, imageData.height, {
          inversionAttempts: "dontInvert",
        });
        if (code) {

          fetchGuestData(code.data)

          drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF3B58");
          drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF3B58");
          drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF3B58");
          drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF3B58");
          outputMessage.hidden = true;
          outputData.parentElement.hidden = false;
          outputData.innerText = code.data;
          codeFound = true;

          $('#code_qr').val(code.data);
          window.location.replace(code.data);
        } else {
          outputMessage.hidden = false;
          outputData.parentElement.hidden = true;
        }
      }
      requestAnimationFrame(tick);
    }

    $('#retry_video').click(function(){
      $('#appendData').html('');
      $('#code_qr').val('');
      codeFound = false;
    })

    $('#btn_refresh').click(function(){
      $('#appendData').html('');
      var code = $('#code_qr').val();
      fetchGuestData(code)
    })

    function fetchGuestData(token) {
        $('#appendData').html('');
        $('#loading').show();

        $.post("{{ route('qr.fscan') }}", {token: token})
          .done(function(data) {
            $('#loading').hide();
            $('#appendData').append(data);
          })
          .fail(function(error){
            $('#loading').hide();
            $('#appendData').html('Terjadi kesalahan, silahkan scan ulang')
          });
    }

    function checkin(guest_history_id) {

      var code = $('#code_qr').val();

      swal({
        title: 'Checkin?',
        text: 'Anda yakin ingin merubah status wisatawan menjadi checkin!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((yakin) => {
        if (yakin) {
          $('#appendData').html('');
          $('#loading').show();
          $.post("{{ route('qr.fscan') }}", { guest_history_id: guest_history_id})
            .done(function( data ) {
                if(data.status == 'success'){
                  swal(data.message, {
                    icon: 'success',
                  });
                  fetchGuestData(code);
                } else {
                  swal(data.message, {
                    icon: 'error',
                  });
                }
            });
        } else {
          swal('Status wisatawan tidak jadi diperbaharui!');
        }
      });
    }

    function checkout(guest_history_id) {

      var code = $('#code_qr').val();

      swal({
        title: 'Checkout?',
        text: 'Anda yakin ingin merubah status wisatawan menjadi checkout!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((yakin) => {
        if (yakin) {
          $('#appendData').html('');
          $('#loading').show();
          $.post("{{ route('qr.fscan') }}", { guest_history_id: guest_history_id})
            .done(function( data ) {
                if(data.status == 'success'){
                  swal(data.message, {
                    icon: 'success',
                  });
                  fetchGuestData(code);
                } else {
                  swal(data.message, {
                    icon: 'error',
                  });
                }
            });
        } else {
          swal('Status wisatawan tidak jadi diperbaharui!');
        }
      });
    }

    function updateFromNative(message) {
      fetchGuestData(message);
      $('#code_qr').val(message);
    }

    function openCamera(){
        try { cameraFlu.postMessage(''); } catch(err) {}
        try { window.flutter_inappwebview.callHandler('openCamera'); } catch (err) {}
    }

    function showButton() {
      $('#mobile').show();
      $('#desktop').hide();
    }

    function hideButton() {
      $('#mobile').hide();
      $('#desktop').show();
    }

    $(function(){
        $('.select2async').select2({
            delay: 400,
            placeholder: "Masukan email wisatawan untuk mencari data..",
            ajax: {
                type: "POST",
                url: "{{ route('qr.fscan') }}",
                dataType: 'json',
                data: function(params) {
                    return {
                        q: params.term
                    }
                },
                processResults: function (data, params) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                token: item.token,
                                text: (item.name == null) ? `${item.email}` : `${item.name} - ${item.email}`,
                                id: item.id
                            }
                        })
                    };
                }
            },
            minimumInputLength: 1
        });

        $('.select2async').on('select2:select', function (e) {
            var data = e.params.data;

            $('#code_qr').val(data.token);
            outputData.innerText = data.token;

            fetchGuestData(data.token);
        });
    });
  </script>
@endsection
