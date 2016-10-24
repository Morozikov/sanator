<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Time To Fish</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Script
    =================================================== -->
    <!--    <script src="js/modernizr.js"></script>-->

    <!-- Favicons
     =================================================== -->
    <link rel="shortcut icon" href="favicon.png" >

</head>


<div id="preloader">
    <div id="status">
        <img src="images/loader.gif" height="60" width="60" alt="">
        <div class="loader">Loading...</div>
    </div>
</div>

<!-- Page Title
  ================================================== -->
<section id="page-title">

    <div class="row">

        <div class="twelve columns">

            <h1>Our Blog<span>.</span></h1>
            <p>Aenean condimentum lacus sit amet luctus lobortis.</p>

        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->


<!-- Content
================================================== -->
<section id="content">

    <div class="row">

        <div id="main" class="tab-whole eight columns">

            <article class="entry">

                <header class="entry-header">

                    <h1 class="entry-title">
                        Hey, This Is a Raleway Typeface!
                    </h1>

                    <div class="entry-meta">
                        <ul>
                            <li>July 12, 2014</li>
                            <span class="meta-sep">•</span>
                            <li><a rel="category tag" title="" href="#">Ghost</a></li>
                            <span class="meta-sep">•</span>
                            <li>John Doe</li>
                        </ul>
                    </div>

                </header>

                <div class="entry-content-media">
                    <div class="post-thumb">
                        <img src="images/post-thumb.jpg">
                    </div>
                </div>

                <div class="entry-content">
                    <p class="lead">Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis aliquip dolore minim ex labore dolor Excepteur Duis velit in officia Excepteur officia officia officia cillum ut elit in fugiat incididunt ea ad Ut ut ea ea dolor ex dolor eu magna voluptate irure consectetur.</p>

                    <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                    </p>

                    <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                    </p>
                </div>

                <p class="tags">
                    <span>Tagged in </span>:
                    <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
                </p>

                <div class="pagenav group">
                    <span class="prev"><a href="#" rel="prev">Previous</a></span>
                    <span class="next"><a href="#" rel="next">Next</a></span>
                </div>

            </article> <!-- /entry -->

            <div id="comments">

                <h3>5 Comments</h3>

                <ol class="commentlist">

                    <li class="depth-1">

                        <div class="avatar">
                            <img width="50" height="50" alt="" src="images/user-01.png" class="avatar">
                        </div>

                        <div class="comment-content">

                            <div class="comment-info">
                                <cite>Itachi Uchiha</cite>

                                <div class="comment-meta">
                                    <time datetime="2014-07-12T23:05" class="comment-time">Jul 12, 2014 @ 23:05</time>
                                    <span class="sep">/</span><a href="#" class="reply">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                    facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                            </div>

                        </div>

                    </li>

                    <li class="thread-alt depth-1">

                        <div class="avatar">
                            <img width="50" height="50" alt="" src="images/user-03.png" class="avatar">
                        </div>

                        <div class="comment-content">

                            <div class="comment-info">
                                <cite>John Doe</cite>

                                <div class="comment-meta">
                                    <time datetime="2014-07-12T24:05" class="comment-time">Jul 12, 2014 @ 24:05</time>
                                    <span class="sep">/</span><a href="#" class="reply">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                    urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                    tantas semper delicatissimi.</p>
                            </div>

                        </div>

                        <ul class="children">

                            <li class="depth-2">

                                <div class="avatar">
                                    <img width="50" height="50" alt="" src="images/user-03.png" class="avatar">
                                </div>

                                <div class="comment-content">

                                    <div class="comment-info">
                                        <cite>Kakashi Hatake</cite>

                                        <div class="comment-meta">
                                            <time datetime="2014-07-12T25:05" class="comment-time">Jul 12, 2014 @ 25:05</time>
                                            <span class="sep">/</span><a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>

                                    <div class="comment-text">
                                        <p>Duis sed odio sit amet nibh vulputate
                                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                            cursus a sit amet mauris</p>
                                    </div>

                                </div>

                                <ul class="children">

                                    <li class="depth-3">

                                        <div class="avatar">
                                            <img width="50" height="50" alt="" src="images/user-03.png" class="avatar">
                                        </div>

                                        <div class="comment-content">

                                            <div class="comment-info">
                                                <cite>John Doe</cite>

                                                <div class="comment-meta">
                                                    <time datetime="2014-07-12T25:15" class="comment-time">July 12, 2014 @ 25:15</time>
                                                    <span class="sep">/</span><a href="#" class="reply">Reply</a>
                                                </div>
                                            </div>

                                            <div class="comment-text">
                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            </div>

                                        </div>

                                    </li>

                                </ul> <!-- /children -->

                            </li>

                        </ul> <!-- /children -->

                    </li>

                    <li class="depth-1">

                        <div class="avatar">
                            <img width="50" height="50" alt="" src="images/user-02.png" class="avatar">
                        </div>

                        <div class="comment-content">

                            <div class="comment-info">
                                <cite>Hinata Hyuga</cite>

                                <div class="comment-meta">
                                    <time datetime="2014-07-12T25:15" class="comment-time">July 12, 2014 @ 25:15</time>
                                    <span class="sep">/</span><a href="#" class="reply">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>

                        </div>

                    </li>

                </ol> <!-- /commentlist -->


                <!-- respond -->
                <div class="respond">

                    <h3>Leave a Comment</h3>

                    <!-- form -->
                    <form action="" method="post" id="contactForm" name="contactForm">
                        <fieldset>

                            <div class="group">
                                <label for="cName">Name <span class="required">*</span></label>
                                <input type="text" value="" size="35" id="cName" name="cName">
                            </div>

                            <div class="group">
                                <label for="cEmail">Email <span class="required">*</span></label>
                                <input type="text" value="" size="35" id="cEmail" name="cEmail">
                            </div>

                            <div class="group">
                                <label for="cWebsite">Website</label>
                                <input type="text" value="" size="35" id="cWebsite" name="cWebsite">
                            </div>

                            <div class="message group">
                                <label for="cMessage">Message <span class="required">*</span></label>
                                <textarea cols="50" rows="10" id="cMessage" name="cMessage"></textarea>
                            </div>

                            <button class="stroke medium" type="submit">Submit</button>

                        </fieldset>
                    </form> <!-- /contactForm -->

                </div> <!-- /respond -->

            </div> <!-- /comments -->

        </div> <!-- /main -->

        <div class="tab-whole four columns end" id="secondary">

            <aside id="sidebar">

                <div class="widget widget_search">

                    <h5>Search</h5>
                    <form action="#">

                        <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search" kl_virtual_keyboard_secure_input="on">
                        <input type="submit" value="" class="submit-search">

                    </form>

                </div> <!-- /widget_search -->

                <div class="widget widget_text">

                    <h5 class="widget-title">Text Widget</h5>
                    <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                        a sit amet mauris. Morbi accumsan ipsum velit.
                    </div>

                </div> <!-- /widget_text -->

                <div class="widget widget_categories">

                    <h5 class="widget-title">Categories</h5>
                    <ul class="link-list group">
                        <li><a href="blog.html">All</a></li>
                        <li><a href="#">Designs</a></li>
                        <li><a href="#">Internet</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Other Stuff</a></li>
                    </ul>

                </div> <!-- /widget_categories -->

                <div class="widget widget_tag_cloud group">

                    <h5 class="widget-title">Tags</h5>
                    <div class="tagcloud group">
                        <a href="#">drupal</a>
                        <a href="#">joomla</a>
                        <a href="#">ghost</a>
                        <a href="#">wordpress</a>
                        <a href="#">magento</a>
                        <a href="#">tumblr</a>
                    </div>

                </div> <!-- /widget_tag_cloud -->

                <div class="widget widget_photostream">

                    <h5>Photostream</h5>
                    <ul class="photostream group">
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                    </ul>

                </div> <!-- /widget_photostream -->

            </aside> <!-- /sidebar -->

        </div> <!-- /secondary -->

    </div> <!-- /row -->

</section> <!-- /content -->

