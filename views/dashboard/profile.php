<?php

/* @var $this yii\web\View */

$this->title = 'Instapro';
?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>User Report <small>Activity report</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="#"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

          <div class="profile_img">

            <!-- end of image cropping -->
            <div id="crop-avatar">
              <!-- Current avatar -->
              <div class="avatar-view" title="" data-original-title="Change the avatar">
                <img src="images/picture.jpg" alt="Avatar">
              </div>

              <!-- Cropping modal -->
              <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                      <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                      </div>
                      <div class="modal-body">
                        <div class="avatar-body">

                          <!-- Upload image and data -->
                          <div class="avatar-upload">
                            <input class="avatar-src" name="avatar_src" type="hidden">
                            <input class="avatar-data" name="avatar_data" type="hidden">
                            <label for="avatarInput">Local upload</label>
                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                          </div>

                          <!-- Crop and preview -->
                          <div class="row">
                            <div class="col-md-9">
                              <div class="avatar-wrapper"></div>
                            </div>
                            <div class="col-md-3">
                              <div class="avatar-preview preview-lg"></div>
                              <div class="avatar-preview preview-md"></div>
                              <div class="avatar-preview preview-sm"></div>
                            </div>
                          </div>

                          <div class="row avatar-btns">
                            <div class="col-md-9">
                              <div class="btn-group">
                                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                      </div> -->
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.modal -->

              <!-- Loading state -->
              <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
            </div>
            <!-- end of image cropping -->

          </div>
          <h3><?= Yii::$app->user->identity->username ?></h3>

          <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
            </li>

            <li>
              <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
            </li>

            <li class="m-top-xs">
              <i class="fa fa-external-link user-profile-icon"></i>
              <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
            </li>
          </ul>

          <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
          <br>

          <!-- start skills -->
          <h4>Skills</h4>
          <ul class="list-unstyled user_data">
            <li>
              <p>Web Applications</p>
              <div class="progress progress_sm">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="50" style="width: 50%;"></div>
              </div>
            </li>
            <li>
              <p>Website Design</p>
              <div class="progress progress_sm">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
              </div>
            </li>
            <li>
              <p>Automation &amp; Testing</p>
              <div class="progress progress_sm">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="29" style="width: 30%;"></div>
              </div>
            </li>
            <li>
              <p>UI / UX</p>
              <div class="progress progress_sm">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="50" style="width: 50%;"></div>
              </div>
            </li>
          </ul>
          <!-- end of skills -->

        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">

          <div class="profile_title">
            <div class="col-md-6">
              <h2>User Activity Report</h2>
            </div>
            <div class="col-md-6">
              <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>March 30, 2016 - April 28, 2016</span> <b class="caret"></b>
              </div>
            </div>
          </div>
          <!-- start of user-activity-graph -->
          <div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="1170" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="228.081415708" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,228.5H1145" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="177.311061781" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.0141867810000065" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,177.5H1145" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="126.540707854" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.009457854000004" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,126.5H1145" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="75.770353927" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.004728927000002" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,75.5H1145" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25.5H1145" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="1090.05" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,332.1767,1075.5916)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Oct</tspan></text><text x="980.15" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,276.2235,982.142)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text x="870.25" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,221.2782,886.9739)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Aug</tspan></text><text x="760.35" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,167.8251,789.1943)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jul</tspan></text><text x="650.45" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,111.872,695.7447)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text x="540.55" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,56.1767,601.8757)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">May</tspan></text><text x="430.65" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,2.2235,504.962)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Apr</tspan></text><text x="320.75" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-53.2218,410.66)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar</tspan></text><text x="210.85" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-108.1749,315.4784)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Feb</tspan></text><text x="100.95" y="240.581415708" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-162.878,219.8638)"><tspan dy="4.003290708000009" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jan</tspan></text><rect x="59.7375" y="187.4651325664" width="39.712500000000006" height="40.61628314160001" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="169.6375" y="164.61847329925" width="39.712500000000006" height="63.462942408749996" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="279.5375" y="138.72559279648002" width="39.712500000000006" height="89.35582291152" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="389.43750000000006" y="114.35582291152001" width="39.712500000000006" height="113.72559279648" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="499.33750000000003" y="93.53997780145002" width="39.712500000000006" height="134.54143790655" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="609.2375" y="68.66250437722002" width="39.712500000000006" height="159.41891133078" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="719.1375" y="51.90828758131002" width="39.712500000000006" height="176.17312812669" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="829.0375" y="82.37049993751" width="39.712500000000006" height="145.71091577049" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="938.9375" y="106.23256628320001" width="39.712500000000006" height="121.8488494248" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="1048.8374999999999" y="120.95596892203001" width="39.712500000000006" height="107.12544678597" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
          <!-- end of user-activity-graph -->

          <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                <!-- start recent activity -->
                <ul class="messages">
                  <li>
                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-info">24</h3>
                      <p class="month">May</p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading">Desmond Davison</h4>
                      <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                      </p>
                    </div>
                  </li>
                  <li>
                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-error">21</h3>
                      <p class="month">May</p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading">Brian Michaels</h4>
                      <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                        <a href="#" data-original-title="">Download</a>
                      </p>
                    </div>
                  </li>
                  <li>
                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-info">24</h3>
                      <p class="month">May</p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading">Desmond Davison</h4>
                      <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                      </p>
                    </div>
                  </li>
                  <li>
                    <img src="images/img.jpg" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-error">21</h3>
                      <p class="month">May</p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading">Brian Michaels</h4>
                      <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                        <a href="#" data-original-title="">Download</a>
                      </p>
                    </div>
                  </li>

                </ul>
                <!-- end recent activity -->

              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                <!-- start user projects -->
                <table class="data table table-striped no-margin">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Project Name</th>
                      <th>Client Company</th>
                      <th class="hidden-phone">Hours Spent</th>
                      <th>Contribution</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>New Company Takeover Review</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">18</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>New Partner Contracts Consultanci</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">13</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger" data-transitiongoal="15" aria-valuenow="15" style="width: 15%;"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Partners and Inverstors report</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">30</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="45" aria-valuenow="45" style="width: 45%;"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>New Company Takeover Review</td>
                      <td>Deveint Inc</td>
                      <td class="hidden-phone">28</td>
                      <td class="vertical-align-mid">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" data-transitiongoal="75" aria-valuenow="75" style="width: 75%;"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- end user projects -->

              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                  photo booth letterpress, commodo enim craft beer mlkshk </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>