<!DOCTYPE html>
<html lang="en">

<head>
    <title>Examples - jQuery Steps</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Rafael Staib">
    <meta name="description" content="A powerful jQuery wizard plugin that supports accessibility and HTML5.">
    <meta name="keywords"
        content="jQuery, jQuery Plugin, jQuery UI Component, jQuery Wizard, jQuery Tabs,
    jQuery Steps, HTML5, JavaScript, Accessibility, jQuery Form Wizard, jQuery Form Validation, jQuery Step by Step">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="YjJt-mRDxR14C4j_fwdLLztW-4LUSAw7iZ5z1xBBHn4" />
    <meta name="google-site-verification" content="pOf4qeAKWi4KNjWST1Zlqo8hGbUlpV8PwqYZkA52fww" />

    <!-- Required for Open Graph -->
    <meta property="og:title" content="jQuery Steps">
    <meta property="og:description" content="A powerful jQuery wizard plugin that supports accessibility and HTML5.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.jquery-steps.com">
    <meta property="og:image" content="http://www.jquery-steps.com/Content/images/social.png">

    <!-- Required for Twitter -->
    <meta property="twitter:card" content="summary">
    <meta name="twitter:creator" content="@RafaelStaib">
    <meta property="twitter:title" content="jQuery Steps">
    <meta name="twitter:description" content="A powerful jQuery wizard plugin that supports accessibility and HTML5.">
    <meta name="twitter:image" content="http://www.jquery-steps.com/Content/images/social.png">

    <meta name="application-name" content="jQuery Steps" />
    <meta name="msapplication-tooltip" content="jQuery Steps" />

    <link rel="shortcut icon" href="/icon.png">
    <!--link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="/Scripts/html5shiv?v=RE_gJ9EUPkTBKS71UlDP_lykWxpC3LqjM3UwakH-oGQ1"></script>

<![endif]-->

    <style>
        @-webkit-viewport {
            width: device-width;
        }

        @-moz-viewport {
            width: device-width;
        }

        @-ms-viewport {
            width: device-width;
        }

        @-o-viewport {
            width: device-width;
        }

        @viewport {
            width: device-width;
        }
    </style>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
    <link href="/Content/Examples?v=oArYkice2OEJI0LuKioGJ4ayetiUonme8i983GzQqX41" rel="stylesheet" />


    <link rel="prev" title="Getting Started with jQuery Steps" href="http://www.jquery-steps.com/GettingStarted">
    <link rel="next" title="Documentation for jQuery Steps" href="http://www.jquery-steps.com/Documentation">

</head>

<body data-spy="scroll" data-target="#lefthand" data-offset="60">
    <a name="top"></a>

    <div id="topbar" class="navbar navbar-fixed-top">
        <div class="navbar-inner container">
            <h1>
                <a href="/">jQuery Steps</a>
            </h1>

            <nav role="navigation">
                <ul>
                    <li class=""><a href="/GettingStarted">Getting Started</a></li>
                    <li class="active"><a href="/Examples">Examples</a></li>
                    <li><a href="https://github.com/rstaib/jquery-steps/wiki">Documentation</a></li>
                    <li><a href="http://www.jquery-bootgrid.com">Bootgrid <span
                                class="badge badge-important">New</span></a></li>
                    <li><a href="https://chillicream.com/blog/2013/09/12/jquery-steps-form-wizard">Blog</a></li>
                    <li><a href="https://github.com/rstaib/jquery-steps">GitHub</a></li>
                    <li class=""><a href="/About">About</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sitewrapper container">

        <header id="banner" role="banner">
            <h1>Examples</h1>
            <p>See how beautiful jQuery Steps is and what you can do with it!</p>
            <div id="carbonads-container">
                <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYIKK7L&placement=jquerystepscom"
                    id="_carbonads_js"></script>
            </div>
        </header>

        <div class="socialbar clearfix">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.jquery-steps.com"
                data-text=" jquery steps" data-via="RafaelStaib" data-hashtags="jquerysteps">Tweet</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');
            </script>
            <div class="fb-like" data-href="http://www.jquery-steps.com" data-send="false" data-layout="button_count"
                data-width="110" data-show-faces="false" data-font="arial"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="g-plusone" data-size="medium" data-href="http://www.jquery-steps.com"></div>
            <script>
                (function() {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
            </script>
            <iframe src="/github-btn.html?user=rstaib&repo=jquery-steps&type=watch&count=true"
                allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
            <iframe src="/github-btn.html?user=rstaib&repo=jquery-steps&type=fork&count=true" allowtransparency="true"
                frameborder="0" scrolling="0" width="110" height="20"></iframe>
        </div>




        <div class="content">
            <div class="row-fluid">
                <nav id="lefthand" class="span3" role="navigation">
                    <ul id="lefthand-nav" class="nav nav-list">
                        <li><a href="#basic">Basic Example</a></li>
                        <li><a href="#basic-form">Basic Form Example</a></li>
                        <li><a href="#advanced-form">Advanced Form Example</a></li>
                        <li><a href="#manipulation">Dynamic Manipulation Example</a></li>
                        <li><a href="#tabs">Tabs Example</a></li>
                        <li><a href="#vertical">Vertical Steps Example</a></li>
                        <li><a href="#async">Async Content Loading Example</a></li>
                        <li><a href="#embed">Embedded Content Example</a></li>
                    </ul>
                </nav>
                <div class="span9 main" role="main">
                    <section id="basic">
                        <h2 class="page-header">Basic Example</h2>
                        <p><button id="init-basic" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-basic" style="display: none;">
                            <h3>Keyboard</h3>
                            <section>
                                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            </section>

                            <h3>Effects</h3>
                            <section>
                                <p>Wonderful transition effects.</p>
                            </section>

                            <h3>Pager</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                        <details open>
                            <summary><span class="fa fa-caret-down"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-basic"&gt;
    &lt;h3&gt;Keyboard&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Effects&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Pager&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="basic-form">
                        <h2 class="page-header">Basic Form Example</h2>
                        <p><button id="init-form" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <form id="example-form" action="#" style="display: none;">
                            <div>
                                <h3>Account</h3>
                                <section>
                                    <label for="userName">User name *</label>
                                    <input id="userName" name="userName" type="text" class="required">
                                    <label for="password">Password *</label>
                                    <input id="password" name="password" type="text" class="required">
                                    <label for="confirm">Confirm Password *</label>
                                    <input id="confirm" name="confirm" type="text" class="required">
                                    <p>(*) Mandatory</p>
                                </section>

                                <h3>Profile</h3>
                                <section>
                                    <label for="name">First name *</label>
                                    <input id="name" name="name" type="text" class="required">
                                    <label for="surname">Last name *</label>
                                    <input id="surname" name="surname" type="text" class="required">
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" class="required email">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text">
                                    <p>(*) Mandatory</p>
                                </section>

                                <h3>Hints</h3>
                                <section>
                                    <ul>
                                        <li>Foo</li>
                                        <li>Bar</li>
                                        <li>Foobar</li>
                                    </ul>
                                </section>

                                <h3>Finish</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section>
                            </div>
                        </form>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;form id="example-form" action="#"&gt;
    &lt;div&gt;
        &lt;h3&gt;Account&lt;/h3&gt;
        &lt;section&gt;
            &lt;label for="userName"&gt;User name *&lt;/label&gt;
            &lt;input id="userName" name="userName" type="text" class="required"&gt;
            &lt;label for="password"&gt;Password *&lt;/label&gt;
            &lt;input id="password" name="password" type="text" class="required"&gt;
            &lt;label for="confirm"&gt;Confirm Password *&lt;/label&gt;
            &lt;input id="confirm" name="confirm" type="text" class="required"&gt;
            &lt;p&gt;(*) Mandatory&lt;/p&gt;
        &lt;/section&gt;
        &lt;h3&gt;Profile&lt;/h3&gt;
        &lt;section&gt;
            &lt;label for="name"&gt;First name *&lt;/label&gt;
            &lt;input id="name" name="name" type="text" class="required"&gt;
            &lt;label for="surname"&gt;Last name *&lt;/label&gt;
            &lt;input id="surname" name="surname" type="text" class="required"&gt;
            &lt;label for="email"&gt;Email *&lt;/label&gt;
            &lt;input id="email" name="email" type="text" class="required email"&gt;
            &lt;label for="address"&gt;Address&lt;/label&gt;
            &lt;input id="address" name="address" type="text"&gt;
            &lt;p&gt;(*) Mandatory&lt;/p&gt;
        &lt;/section&gt;
        &lt;h3&gt;Hints&lt;/h3&gt;
        &lt;section&gt;
            &lt;ul&gt;
                &lt;li&gt;Foo&lt;/li&gt;
                &lt;li&gt;Bar&lt;/li&gt;
                &lt;li&gt;Foobar&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/section&gt;
        &lt;h3&gt;Finish&lt;/h3&gt;
        &lt;section&gt;
            &lt;input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"&gt; &lt;label for="acceptTerms"&gt;I agree with the Terms and Conditions.&lt;/label&gt;
        &lt;/section&gt;
    &lt;/div&gt;
&lt;/form&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});
</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="advanced-form">
                        <h2 class="page-header">Advanced Form Example</h2>
                        <p><button id="init-advanced-form" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <form id="example-advanced-form" action="#" style="display: none;">
                            <h3>Account</h3>
                            <fieldset>
                                <legend>Account Information</legend>

                                <label for="userName-2">User name *</label>
                                <input id="userName-2" name="userName" type="text" class="required">
                                <label for="password-2">Password *</label>
                                <input id="password-2" name="password" type="text" class="required">
                                <label for="confirm-2">Confirm Password *</label>
                                <input id="confirm-2" name="confirm" type="text" class="required">
                                <p>(*) Mandatory</p>
                            </fieldset>

                            <h3>Profile</h3>
                            <fieldset>
                                <legend>Profile Information</legend>

                                <label for="name-2">First name *</label>
                                <input id="name-2" name="name" type="text" class="required">
                                <label for="surname-2">Last name *</label>
                                <input id="surname-2" name="surname" type="text" class="required">
                                <label for="email-2">Email *</label>
                                <input id="email-2" name="email" type="text" class="required email">
                                <label for="address-2">Address</label>
                                <input id="address-2" name="address" type="text">
                                <label for="age-2">Age (The warning step will show up if age is less than 18)
                                    *</label>
                                <input id="age-2" name="age" type="text" class="required number">
                                <p>(*) Mandatory</p>
                            </fieldset>

                            <h3>Warning</h3>
                            <fieldset>
                                <legend>You are to young</legend>

                                <p>Please go away ;-)</p>
                            </fieldset>

                            <h3>Finish</h3>
                            <fieldset>
                                <legend>Terms and Conditions</legend>

                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;form id="example-advanced-form" action="#"&gt;
    &lt;h3&gt;Account&lt;/h3&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;Account Information&lt;/legend&gt;

        &lt;label for="userName-2"&gt;User name *&lt;/label&gt;
        &lt;input id="userName-2" name="userName" type="text" class="required"&gt;
        &lt;label for="password-2"&gt;Password *&lt;/label&gt;
        &lt;input id="password-2" name="password" type="text" class="required"&gt;
        &lt;label for="confirm-2"&gt;Confirm Password *&lt;/label&gt;
        &lt;input id="confirm-2" name="confirm" type="text" class="required"&gt;
        &lt;p&gt;(*) Mandatory&lt;/p&gt;
    &lt;/fieldset&gt;

    &lt;h3&gt;Profile&lt;/h3&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;Profile Information&lt;/legend&gt;

        &lt;label for="name-2"&gt;First name *&lt;/label&gt;
        &lt;input id="name-2" name="name" type="text" class="required"&gt;
        &lt;label for="surname-2"&gt;Last name *&lt;/label&gt;
        &lt;input id="surname-2" name="surname" type="text" class="required"&gt;
        &lt;label for="email-2"&gt;Email *&lt;/label&gt;
        &lt;input id="email-2" name="email" type="text" class="required email"&gt;
        &lt;label for="address-2"&gt;Address&lt;/label&gt;
        &lt;input id="address-2" name="address" type="text"&gt;
        &lt;label for="age-2"&gt;Age (The warning step will show up if age is less than 18) *&lt;/label&gt;
        &lt;input id="age-2" name="age" type="text" class="required number"&gt;
        &lt;p&gt;(*) Mandatory&lt;/p&gt;
    &lt;/fieldset&gt;

    &lt;h3&gt;Warning&lt;/h3&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;You are to young&lt;/legend&gt;

        &lt;p&gt;Please go away ;-)&lt;/p&gt;
    &lt;/fieldset&gt;

    &lt;h3&gt;Finish&lt;/h3&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;Terms and Conditions&lt;/legend&gt;

        &lt;input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"&gt; &lt;label for="acceptTerms-2"&gt;I agree with the Terms and Conditions.&lt;/label&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
var form = $("#example-advanced-form").show();

form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="manipulation">
                        <h2 class="page-header">Dynamic Manipulation Example</h2>
                        <p><button id="init-manipulation" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-manipulation" style="display: none;">
                            <h3>Add Step</h3>
                            <section>
                                <p>
                                    <label for="title-3">HTML Title *</label><br />
                                    <input id="title-3" type="text"><br />
                                    <label for="text-3">HTML Content *</label><br />
                                    <textarea id="text-3" rows="5"></textarea>
                                </p>
                                <p><a href="javascript:void(0);"
                                        onclick="$('#wizard-4').steps('add', { title: $('#title-3').val(), content: $('#text-3').val() });">Add</a>
                                </p>
                                <p>(*) Mandatory</p>
                            </section>

                            <h3>Insert Step</h3>
                            <section>
                                <p>
                                    <label for="position-3">Position (zero-based) *</label><br />
                                    <input id="position-3" type="text"><br />
                                    <label for="title2-3">HTML Title *</label><br />
                                    <input id="title2-3" type="text"><br />
                                    <label for="text2-3">HTML Content *</label><br />
                                    <textarea id="text2-3" rows="5"></textarea>
                                </p>
                                <p><a href="javascript:void(0);"
                                        onclick="$('#wizard-4').steps('insert', Number($('#position-3').val()), { title: $('#title2-3').val(), content: $('#text2-3').val() });">Insert</a>
                                </p>
                                <p>(*) Mandatory</p>
                            </section>

                            <h3>Remove Step</h3>
                            <section>
                                <p>
                                    <label for="position2-3">Position (zero-based) *</label><br />
                                    <input id="position2-3" type="text">
                                </p>
                                <p><a href="javascript:void(0);"
                                        onclick="$('#wizard-4').steps('remove', Number($('#position2-3').val()));">Remove</a>
                                </p>
                                <p>(*) Mandatory</p>
                            </section>
                        </div>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-manipulation"&gt;
    &lt;h3&gt;Add Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;
            &lt;label for="title-3"&gt;HTML Title *&lt;/label&gt;&lt;br /&gt;
            &lt;input id="title-3" type="text"&gt;&lt;br /&gt;
            &lt;label for="text-3"&gt;HTML Content *&lt;/label&gt;&lt;br /&gt;
            &lt;textarea id="text-3" rows="5"&gt;&lt;/textarea&gt;
        &lt;/p&gt;
        &lt;p&gt;&lt;a href="javascript:void(0);" onclick="$('#wizard-4').steps('add', { title: $('#title-3').val(), content: $('#text-3').val() });"&gt;Add&lt;/a&gt;&lt;/p&gt;
        &lt;p&gt;(*) Mandatory&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Insert Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;
            &lt;label for="position-3"&gt;Position (zero-based) *&lt;/label&gt;&lt;br /&gt;
            &lt;input id="position-3" type="text"&gt;&lt;br /&gt;
            &lt;label for="title2-3"&gt;HTML Title *&lt;/label&gt;&lt;br /&gt;
            &lt;input id="title2-3" type="text"&gt;&lt;br /&gt;
            &lt;label for="text2-3"&gt;HTML Content *&lt;/label&gt;&lt;br /&gt;
            &lt;textarea id="text2-3" rows="5"&gt;&lt;/textarea&gt;
        &lt;/p&gt;
        &lt;p&gt;&lt;a href="javascript:void(0);" onclick="$('#wizard-4').steps('insert', Number($('#position-3').val()), { title: $('#title2-3').val(), content: $('#text2-3').val() });"&gt;Insert&lt;/a&gt;&lt;/p&gt;
        &lt;p&gt;(*) Mandatory&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Remove Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;
            &lt;label for="position2-3"&gt;Position (zero-based) *&lt;/label&gt;&lt;br /&gt;
            &lt;input id="position2-3" type="text"&gt;
        &lt;/p&gt;
        &lt;p&gt;&lt;a href="javascript:void(0);" onclick="$('#wizard-4').steps('remove', Number($('#position2-3').val()));"&gt;Remove&lt;/a&gt;&lt;/p&gt;
        &lt;p&gt;(*) Mandatory&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-manipulation").steps({
    headerTag: "h3",
    bodyTag: "section",
    enableAllSteps: true,
    enablePagination: false
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="tabs">
                        <h2 class="page-header">Tabs Example</h2>
                        <p><button id="init-tabs" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-tabs" style="display: none;">
                            <h3>Keyboard</h3>
                            <section>
                                <p>What is needed to transform it to a tabs component? Not much. Just override some
                                    properties and done.</p>
                                <pre class="prettyprint linenums">
$("#wizard").steps({
    // Disables the finish button (required if pagination is enabled)
    enableFinishButton: false,
    // Disables the next and previous buttons (optional)
    enablePagination: false,
    // Enables all steps from the begining
    enableAllSteps: true,
    // Removes the number from the title
    titleTemplate: "#title#"
});
</pre>
                            </section>

                            <h3>Other demos</h3>
                            <section>
                                <p>Scroll down or up to see the other demos.</p>
                            </section>

                            <h3>Documentation</h3>
                            <section>
                                <p>For more information <a href="https://github.com/rstaib/jquery-steps/wiki">check out
                                        the documentation</a>!</p>
                            </section>

                            <h3>Download</h3>
                            <section>
                                <p>See on getting started!</p>
                            </section>
                        </div>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-tabs"&gt;
    &lt;h3&gt;Keyboard&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;What is needed to transform it to a tabs component? Not much. Just override some properties and done.&lt;/p&gt;
        &lt;pre class="prettyprint linenums"&gt;
$("#wizard").steps({
    // Disables the finish button (required if pagination is enabled)
    enableFinishButton: false,
    // Disables the next and previous buttons (optional)
    enablePagination: false,
    // Enables all steps from the begining
    enableAllSteps: true,
    // Removes the number from the title
    titleTemplate: "#title#"
});
&lt;/pre&gt;
    &lt;/section&gt;
    &lt;h3&gt;Other demos&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Scroll down or up to see the other demos.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Documentation&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;For more information &lt;a href="https://github.com/rstaib/jquery-steps/wiki"&gt;check out the documentation&lt;/a&gt;!&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Download&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;See on getting started!&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-tabs").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    enableFinishButton: false,
    enablePagination: false,
    enableAllSteps: true,
    titleTemplate: "#title#",
    cssClass: "tabcontrol"
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="vertical">
                        <h2 class="page-header">Vertical Steps Example</h2>
                        <p><button id="init-vertical" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-vertical" style="display: none;">
                            <h3>Keyboard</h3>
                            <section>
                                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            </section>

                            <h3>Effects</h3>
                            <section>
                                <p>Wonderful transition effects.</p>
                            </section>

                            <h3>Pager</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-vertical"&gt;
    &lt;h3&gt;Keyboard&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Effects&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Pager&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-vertical").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical"
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="async">
                        <h2 class="page-header">Async Content Loading Example</h2>
                        <p><button id="init-async" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-async" style="display: none;">
                            <h3>Async Step</h3>
                            <section data-mode="async" data-url="/Examples/AsyncContent"></section>

                            <h3>Second Step</h3>
                            <section>
                                <p>
                                    Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam
                                    ac ligula elementum pellentesque.
                                    In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor
                                    elit. Morbi varius, nulla quis condimentum
                                    dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer
                                    hendrerit sapien a diam adipiscing consectetur.
                                    In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus,
                                    rhoncus sagittis iaculis nec, malesuada a diam.
                                    Donec non pulvinar urna. Aliquam id velit lacus.
                                </p>
                            </section>

                            <h3>Third Step</h3>
                            <section>
                                <p>
                                    Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at
                                    justo condimentum dapibus. Fusce eros justo,
                                    pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend
                                    varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris
                                    venenatis.
                                </p>
                            </section>

                            <h3>Fourth Step</h3>
                            <section>
                                <p>
                                    Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris
                                    vehicula vulputate. Aliquam sed sem tortor.
                                    Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum
                                    purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                    tortor.
                                </p>
                            </section>
                        </div>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-async"&gt;
    &lt;h3&gt;Async Step&lt;/h3&gt;
    &lt;section data-mode="async" data-url="/Examples/AsyncContent"&gt;
    &lt;/section&gt;
    &lt;h3&gt;Second Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
            In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
            dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
            In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
            Donec non pulvinar urna. Aliquam id velit lacus.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Third Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
            pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
            Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
            venenatis.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Fourth Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
            Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
            Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-async").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide"
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                    <section id="embed">
                        <h2 class="page-header">Embedded Content Example</h2>
                        <p><button id="init-embed" type="button" class="btn btn-large btn-primary">Start
                                Example</button></p>
                        <div id="example-embed" style="display: none;">
                            <h3>Iframe Step</h3>
                            <section data-mode="iframe" data-url="/Examples/EmbeddedContent"></section>

                            <h3>Second Step</h3>
                            <section>
                                <p>
                                    Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam
                                    ac ligula elementum pellentesque.
                                    In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor
                                    elit. Morbi varius, nulla quis condimentum
                                    dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer
                                    hendrerit sapien a diam adipiscing consectetur.
                                    In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus,
                                    rhoncus sagittis iaculis nec, malesuada a diam.
                                    Donec non pulvinar urna. Aliquam id velit lacus.
                                </p>
                            </section>

                            <h3>Third Step</h3>
                            <section>
                                <p>
                                    Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at
                                    justo condimentum dapibus. Fusce eros justo,
                                    pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend
                                    varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris
                                    venenatis.
                                </p>
                            </section>

                            <h3>Fourth Step</h3>
                            <section>
                                <p>
                                    Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris
                                    vehicula vulputate. Aliquam sed sem tortor.
                                    Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum
                                    purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                    tortor.
                                </p>
                            </section>
                        </div>
                        <details>
                            <summary><span class="fa fa-caret-right"></span> Code</summary>
                            <div class="code">
                                <h3>HTML</h3>
                                <section>
                                    <pre class="prettyprint linenums">
&lt;div id="example-embed"&gt;
    &lt;h3&gt;Iframe Step&lt;/h3&gt;
    &lt;section data-mode="iframe" data-url="/Examples/EmbeddedContent"&gt;
    &lt;/section&gt;
    &lt;h3&gt;Second Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
            In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
            dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
            In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
            Donec non pulvinar urna. Aliquam id velit lacus.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Third Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
            pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
            Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
            venenatis.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Fourth Step&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
            Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
            Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</pre>
                                </section>

                                <h3>JavaScript</h3>
                                <section>
                                    <pre class="prettyprint linenums">
$("#example-embed").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "fade"
});</pre>
                                </section>
                            </div>
                        </details>
                    </section>
                </div>
            </div>
        </div>


    </div>

    <footer id="footer" role="contentinfo">
        <p>&copy; Copyright 2023, <a href="http://rafaelstaib.com">Rafael Staib</a></p>
        <ul class="links">
            <li><a href="/Imprint">Impressum</a></li>
            <li class="muted">·</li>
            <li><a href="/Privacy">Datenschutz</a></li>
            <li class="muted">·</li>
            <li><a href="https://github.com/rstaib/jquery-steps/issues">Issues</a></li>
            <li class="muted">·</li>
            <li><a href="https://github.com/rstaib/jquery-steps/releases">Releases</a></li>
        </ul>
    </footer>

    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"));
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
        }

        // Google Analytics
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-40997516-1', 'jquery-steps.com');
        ga('send', 'pageview');
    </script>
    <script src="/Scripts/Examples?v=szy5AsAuXKpEfwFGRimEy2MhBBlHea801wFJod1pspE1"></script>


    <script>
        $(function() {
            $("#lefthand-nav").affix({
                offset: {
                    top: function() {
                        return $("#topbar").outerHeight() + $("#banner").outerHeight();
                    }
                }
            });

            $("details").details().on({
                "open.details": function() {
                    $("> summary > .fa", this).removeClass("fa-caret-right").addClass("fa-caret-down");
                },
                "close.details": function() {
                    $("> summary > .fa", this).removeClass("fa-caret-down").addClass("fa-caret-right");
                }
            });

            $(".code").steps({
                headerTag: "h3",
                bodyTag: "section",
                enableFinishButton: false,
                enablePagination: false,
                enableAllSteps: true,
                titleTemplate: "#title#",
                cssClass: "tabcontrol"
            });

            prettyPrint();

            $("#init-basic").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();
                $("#example-basic").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    autoFocus: true
                });
            });

            $("#init-form").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                var form = $("#example-form").show();

                form.validate({
                    errorPlacement: function errorPlacement(error, element) {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });

                form.children("div").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    onStepChanging: function(event, currentIndex, newIndex) {
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    onFinishing: function(event, currentIndex) {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function(event, currentIndex) {
                        alert("Submitted!");
                    }
                });
            });

            $("#init-advanced-form").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                var form = $("#example-advanced-form").show();

                form.steps({
                    headerTag: "h3",
                    bodyTag: "fieldset",
                    transitionEffect: "slideLeft",
                    onStepChanging: function(event, currentIndex, newIndex) {
                        // Allways allow previous action even if the current form is not valid!
                        if (currentIndex > newIndex) {
                            return true;
                        }

                        // Forbid next action on "Warning" step if the user is to young
                        if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                            return false;
                        }

                        // Needed in some cases if the user went back (clean up)
                        if (currentIndex < newIndex) {
                            // To remove error styles
                            form.find(".body:eq(" + newIndex + ") label.error").remove();
                            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                        }

                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    onStepChanged: function(event, currentIndex, priorIndex) {
                        // Used to skip the "Warning" step if the user is old enough.
                        if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                            form.steps("next");
                        }

                        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                        if (currentIndex === 2 && priorIndex === 3) {
                            form.steps("previous");
                        }
                    },
                    onFinishing: function(event, currentIndex) {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function(event, currentIndex) {
                        alert("Submitted!");
                    }
                }).validate({
                    errorPlacement: function errorPlacement(error, element) {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password-2"
                        }
                    }
                });
            });

            $("#init-manipulation").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                $("#example-manipulation").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    enableAllSteps: true,
                    enablePagination: false
                });
            });

            $("#init-tabs").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                $("#example-tabs").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    enableFinishButton: false,
                    enablePagination: false,
                    enableAllSteps: true,
                    titleTemplate: "#title#",
                    cssClass: "tabcontrol"
                });
            });

            $("#init-vertical").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                $("#example-vertical").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    stepsOrientation: "vertical"
                });
            });

            $("#init-async").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                $("#example-async").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slide"
                });
            });

            $("#init-embed").one("click", function(e) {
                e.stopPropagation();
                $(this).remove();

                $("#example-embed").show().steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "fade"
                });
            });
        });
    </script>

</body>

</html>
