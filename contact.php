<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="SEO stuff">
    <title>Contact - Hewlett Studios</title>
    <meta charset="utf-8">
    <meta name="author" content="Dee Adebayo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/public/css/styles.css" rel="stylesheet" type="text/css">
    <!--link(href='/boomz/css/animate.css', rel='stylesheet', type='text/css')-->
    <!--link(rel="shortcut icon", type="image/x-icon", href="favicon.ico")-->
</head>

<body>
    <div class="container-fluid myfluid">
        <header role="banner" class="navbar navbar-default navbar-fixed-top bs-docs-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="../" class="navbar-brand bod-right"><img src="http://placehold.it/150x50&amp;text=Logo" alt=""></a>
                </div>
                <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="bod-right"><a href="../about.html">About Us</a></li>
                        <li class="dropdown bod-right"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Explore/Info <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="../explore/gear.html">Gear</a></li>
                                <li><a href="../explore/rates.html">Rates</a></li>
                                <li><a href="../explore/artists.html">Artists</a></li>
                                <li><a href="../explore/photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="../explore/testimonials.html">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="bod-right"><a href="../team.html">Team</a></li>
                        <li class="bod-right"><a href="../contact.html">Contact</a></li>
                        <li class="active"><a href="#">Call: 123 456 7890</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="underneath-nav"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <h2>Say hello</h2>
                    <br>
                    <p>Introductory text to initiate conversation. Blah blah blah blah blah blah blah blah blah blah</p>
                    <p>bleh, include php forms - send to which email?</p>
                    <form id="contact_form" action=" " method="post" class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group col-md-12">
                                        <input name="first_name" placeholder="What's your name?" type="text" class="form-control form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group col-md-12">
                                        <input name="email" placeholder="Your email address" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group col-md-12">
                                        <textarea name="comment" placeholder="Message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div role="alert" id="success_message" class="alert alert-success"><i class="glyphicon glyphicon-thumbs-up"></i>Thanks for contacting us, we will get back to you shortly</div>
                            <div class="form-group">
                                <label class="col-md-12 control-label"></label>
                                <div class="col-md-6">
                                    <p class="muted">Or call us at 123 456 7890</p>
                                </div>
                                <div class="col-md-3 col-md-offset-3">
                                    <button type="submit" class="btn btn-warning">Send<span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-xs-12 col-md-5 col-md-offset-2">
                    <h2 style="visibility:hidden">Say hello</h2>
                    <br>
                    <div class="col-xs-12">
                        <div id="map"></div>
                        <script>
                            var map;
                            var mapOptions = {
                                mapTypeId: google.maps.MapTypeId.TERRAIN
                            };

                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: 34.229604,
                                        lng: -84.106121
                                    },
                                    zoom: 14
                                });
                                map.setTilt(45);
                            }
                        </script>
                    </div>
                    <p>More address stuff - address, phone, maybe a script to give them nav directions? No borders. lead is too big</p>
                    <p class="lead">A: 1490 Ventura Dr, Cumming, GA 30040</p>
                    <p class="lead">P: 123 456 7890</p>
                </div>
            </div>
        </div>
        <br>
        <div class="footer-loc">
            <section class="logo-area">
                <div class="container">
                    <h1 class="text-center">{put me logo here}</h1></div>
            </section>
            <div class="container-fluid myfluid footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p>Keep up with us</p>
                            <p><a href="/" title="Like us on Facebook"><i class="fa fa-2x fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="/" title="Follow us on Google Plus"><i class="fa fa-2x fa-google-plus-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="/" title="Follow us on Instagram"><i class="fa fa-2x fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;<a href="mailto:hello@hewlettstudios.com?Subject=Hello" target="_top" title="Send us an Email"><i class="fa fa-2x fa-envelope-square"></i></a>&nbsp;&nbsp;&nbsp;</p>
                            <div class="col-xs-6 col-md-4 text-center">
                                <p>1490 Ventura Dr, Cumming GA</p>
                            </div>
                            <div class="col-xs-6 col-md-4 text-center">
                                <a href="mailto:hello@hewlettstudios.com?Subject=Hello" target="_top" title="Send us an Email">
                                    <p>hello@hewlettstudios.com</p>
                                </a>
                            </div>
                            <div class="hidden-xs col-md-4 text-center">
                                <a href="tel:911" title="Give us a call">
                                    <p>telephone number</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <p class="text-muted">&copy; 2016 Hewlett Studios (what's your compnay name?). All Rights Reserved.</p>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <p class="text-muted small">Designed & built with love(heart) and coffee by deeadebayo</p>
                            </div>
                            <div class="col-xs-6">
                                <p class="text-muted small"><a data-toggle="modal" data-target=".site-map-modal">site map</a></p>
                                <div tabindex="-1" role="dialog" class="modal fade site-map-modal">
                                    <div class="modal-dialog modal-lg">
                                        <div style="padding:10px" class="modal-content">
                                            <p class="as-para">Home</p>
                                            <p class="as-para">About Us</p>
                                            <p class="as-para">>Explore</p>
                                            <p class="as-para">>>Gear</p>
                                            <p class="as-para">>>Rates</p>
                                            <p class="as-para">>>Artists</p>
                                            <p class="as-para">>>Photo Gallery</p>
                                            <p class="as-para">>>Testimonials</p>
                                            <p class="as-para">Team</p>
                                            <p class="as-para">Contact</p>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/js/scripts.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjLHbSQrO6U78HQ5NG6KjW4IShtNkwDDo&amp;callback=initMap"></script>
    <script>
        $(document).ready(function () {
            $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your first name'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your last name'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your email address'
                                },
                                emailAddress: {
                                    message: 'Please supply a valid email address'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your phone number'
                                },
                                phone: {
                                    country: 'US',
                                    message: 'Please supply a vaild phone number with area code'
                                }
                            }
                        },
                        address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please supply your street address'
                                }
                            }
                        },
                        city: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please supply your city'
                                }
                            }
                        },
                        state: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your state'
                                }
                            }
                        },
                        zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your zip code'
                                },
                                zipCode: {
                                    country: 'US',
                                    message: 'Please supply a vaild zip code'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 200,
                                    message: 'Please enter at least 10 characters and no more than 200'
                                },
                                notEmpty: {
                                    message: 'Please supply a description of your project'
                                }
                            }
                        }
                    }
                })
                .on('success.form.bv', function (e) {
                    $('#success_message').slideDown({
                            opacity: "show"
                        }, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();
                    // Prevent form submission
                    e.preventDefault();
                    // Get the form instance
                    var $form = $(e.target);
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');
                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function (result) {
                        console.log(result);
                    }, 'json');
                });
        });
    </script>
</body>

</html>
