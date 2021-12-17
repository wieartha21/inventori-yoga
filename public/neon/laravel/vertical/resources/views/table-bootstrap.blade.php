@section('title') 
Neon - Bootstrap Table
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Bootstrap Table</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bootstrap Table</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Basic Table</h5>
                    <h6 class="card-subtitle">Just add the base class  <code>.table</code> and
                        <code>&lt;table&gt;</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>                                            
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Dark Layout Table</h5>
                    <h6 class="card-subtitle">You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>                                            
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Table head options</h5>
                    <h6 class="card-subtitle">Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive m-b-30">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>                                                                                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Striped rows</h5>
                    <h6 class="card-subtitle">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>                                                                                      
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bordered table</h5>
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Borderless table</h5>
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders. <code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                      <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-borderless table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Hoverable rows</h5>
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Small table</h5>
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>                   
                    </div>
                    <div class="table-responsive">
                      <table class="table table-sm table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Contextual classes</h5>
                    <h6 class="card-subtitle">Use contextual classes to color table rows or individual cells.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Class</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="table-active">
                              <th scope="row">Active</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr>
                              <th scope="row">Default</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>                            
                            <tr class="table-primary">
                              <th scope="row">Primary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-secondary">
                              <th scope="row">Secondary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-success">
                              <th scope="row">Success</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-danger">
                              <th scope="row">Danger</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-warning">
                              <th scope="row">Warning</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-info">
                              <th scope="row">Info</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-light">
                              <th scope="row">Light</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="table-dark">
                              <th scope="row">Dark</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                          </tbody>
                        </table>  
                      </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Contextual classes</h5>
                    <h6 class="card-subtitle">Regular table background variants are not available with the dark table, however, you may use <a href="/docs/4.1/utilities/colors/">text or background utilities</a> to achieve similar styles.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-dark">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="bg-primary">
                              <th scope="row">1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="bg-success">
                              <th scope="row">3</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="bg-info">
                              <th scope="row">5</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr>
                              <th scope="row">6</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="bg-warning">
                              <th scope="row">7</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr>
                              <th scope="row">8</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                            <tr class="bg-danger">
                              <th scope="row">9</th>
                              <td>Cell</td>
                              <td>Cell</td>
                            </tr>
                          </tbody>
                        </table>                                             
                      </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Responsive tables</h5>
                    <h6 class="card-subtitle">Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                  <th scope="col">Heading</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                  <td>Cell</td>
                                </tr>
                            </tbody>
                        </table>                                                                                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 