@extends('layouts.default')
@section('content')
    <div class="row no-margin-bottom">
        <div class="col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail no-margin-bottom">
                        <img src="../img/thumbnails/picjumbo.com_IMG_4566.jpg" class="img-responsive">
                        <div class="caption">
                            <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link"
                                                                       href="#thumbnail-label"><span
                                            class="anchorjs-icon"></span></a></h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#"
                                                                                               class="btn btn-default"
                                                                                               role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail no-margin-bottom">
                        <img src="../img/thumbnails/picjumbo.com_IMG_3241.jpg" class="img-responsive">
                        <div class="caption">
                            <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link"
                                                                       href="#thumbnail-label"><span
                                            class="anchorjs-icon"></span></a></h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#"
                                                                                               class="btn btn-default"
                                                                                               role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div class="card-body no-padding">
                    <ul class="message-list">
                        <a href="#">
                            <li>
                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                <div class="message-block">
                                    <div><span class="username">Tui2Tone</span> <span
                                                class="message-datetime">12 min ago</span>
                                    </div>
                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur
                                        bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                <div class="message-block">
                                    <div><span class="username">Tui2Tone</span> <span
                                                class="message-datetime">15 min ago</span>
                                    </div>
                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur
                                        bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                <div class="message-block">
                                    <div><span class="username">Tui2Tone</span> <span
                                                class="message-datetime">2 hour ago</span>
                                    </div>
                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur
                                        bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                <div class="message-block">
                                    <div><span class="username">Tui2Tone</span> <span
                                                class="message-datetime">1 day ago</span>
                                    </div>
                                    <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur
                                        bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="#" id="message-load-more">
                            <li class="text-center load-more">
                                <i class="fa fa-refresh"></i> load more..
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop