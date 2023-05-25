<script setup>
import { Head, Link } from '@inertiajs/vue3';
import '../assets/css/style.css'
import '../assets/plugins/flags/flags.min.css'
// import '../assets/fonts/icons.css'
import '../assets/js/feather.min.js'

import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div id="wrapper" class="">
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">

            <!-- Header -->
            <div id="header">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->

                        <ApplicationLogo />
                        <a href="javascript:void(0);" class="header-icon d-none">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="javascript:void(0);" class="header-icon toggleFullScreen d-none">
                            <i class="icon-feather-maximize"></i>
                    </a>

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">
                    <span v-if="canLogin" class="">
                        
                        <Dropdown align="right" width="48"  v-if="$page.props.auth.user" >
                            <template #trigger>
                                <span class="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        class="inline-flex items-center mt-3 px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                    >
                                        {{ $page.props.auth.user.name }}

                                        <svg
                                            class="ml-2 -mr-0.5 h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                <DropdownLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </DropdownLink>
                            </template>
                        </Dropdown>
                        

                        <template v-else>

                            <div class="header-widget">
                                    <Link v-if="canRegister" :href="route('register')"
                                        class=" mr-5 popup-with-zoom-anim button ripple-effect">
                                    <span>Join Now&nbsp;</span>
                                <!-- <i class="icon-feather-log-in"></i> -->
                                </Link>
                                <Link :href="route('login')" class="popup-with-zoom-anim ">
                                <span>Login &nbsp;</span>
                                <!-- <i class="icon-feather-log-in"></i> -->
                                </Link>
                            </div>
                        
                        </template>
                    </span>
                   
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->
    </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <div class="hero-section">
            <div class="container">

                <!-- Intro Headline -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center hero-content">
                            <img width="180" src="../assets/images/home-hero-icon.png">

                            <h1 class="margin-bottom-10 text_gradient_animation">
                                <strong>Best AI Content Writer</strong>
                            </h1>
                            <p>Create SEO-optimized and unique content for your blogs, ads, emails, and website 10X
                                faster & save hours of work.</p>
                            <Link :href="route('chat.show')" class="button ripple-effect button-sliding-icon">Get Started<i class="icon-feather-arrow-right"></i></Link>
                            <!-- <div class="margin-top-2 gray"><small>No credit card required.</small></div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Content
        ================================================== -->
        <!-- Section How it Work Start-->
        <div class="section gray padding-top-65 padding-bottom-65">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">
                        <!-- Section Headline -->
                        <div class="section-headline centered margin-top-0 margin-bottom-5">
                            <h3>How It Works?</h3>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <!-- Icon Box -->
                        <div class="icon-box with-line">
                            <!-- Icon -->
                            <div class="icon-box-circle">
                                <div class="icon-box-circle-inner">
                                    <i class="icon-feather-layers"></i>
                                    <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                                </div>
                            </div>
                            <h3>Select a template</h3>
                            <p>Choose a content creation template. Multiple templates are available for your all needs.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <!-- Icon Box -->
                        <div class="icon-box with-line">
                            <!-- Icon -->
                            <div class="icon-box-circle">
                                <div class="icon-box-circle-inner">
                                    <i class="icon-feather-folder"></i>
                                    <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                                </div>
                            </div>
                            <h3>Fill the form</h3>
                            <p>Enter a detailed description of your content. Tell the AI what do you want.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <!-- Icon Box -->
                        <div class="icon-box">
                            <!-- Icon -->
                            <div class="icon-box-circle">
                                <div class="icon-box-circle-inner">
                                    <i class="icon-feather-file-text"></i>
                                    <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                                </div>
                            </div>
                            <h3>Get your content</h3>
                            <p>Get a unique high quality content. The content is plagiarism free and you can use it
                                anywhere.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section padding-top-65 padding-bottom-65">
            <div class="container margin-bottom-20">
                <div class="section-headline centered margin-top-0 margin-bottom-30">
                    <h3 class="margin-bottom-5">Templates</h3>
                    <p>Generate your required content with over 60+ content creation templates</p>
                </div>
                <div class="template-categories home-templates">
                    <ul>
                        <li class="active"><a href="javascript:void();" class="ai-templates-category"
                                data-category="all">All templates</a></li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="1">Article And
                                Blogs</a></li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="3">General
                                Writing</a></li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="4">Ecommerce</a>
                        </li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="5">Social
                                Media</a></li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="2">Ads And
                                Marketing Tools</a></li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="6">Website</a>
                        </li>
                        <li><a href="javascript:void();" class="ai-templates-category" data-category="7">Other</a></li>
                    </ul>
                </div>
                <div class="ai-template-blocks-toggle show-blocks-toggle">
                    <div class="row ai-template-blocks">
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Article And Blogs</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-comment"></i>
                                        </div>
                                        <h4>
                                            Blog Ideas </h4>
                                        <p class="margin-bottom-0">Article/blog ideas that you can use to generate more
                                            traffic, leads, and sales for your business.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-align-left"></i>
                                        </div>
                                        <h4>
                                            Blog Intros </h4>
                                        <p class="margin-bottom-0">Enticing article/blog introductions that capture the
                                            attention of the audience.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </div>
                                        <h4>
                                            Blog Titles </h4>
                                        <p class="margin-bottom-0">Nobody wants to read boring blog titles, generate
                                            catchy blog titles with this tool.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <h4>
                                            Blog Section </h4>
                                        <p class="margin-bottom-0">Write a few paragraphs about a subheading of your
                                            article.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-check-square"></i>
                                        </div>
                                        <h4>
                                            Blog Conclusion </h4>
                                        <p class="margin-bottom-0">Create powerful conclusion that will make a reader
                                            take action.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-pencil-square"></i>
                                        </div>
                                        <h4>
                                            Article Writer <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Create a fully complete high quality article from a
                                            title and outline text.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </div>
                                        <h4>
                                            Article Rewriter <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Copy an article, paste it in to the program, and with
                                            just one click you'll have an entirely different article to read.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-list-ul"></i>
                                        </div>
                                        <h4>
                                            Article Outlines <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Detailed article outlines that help you write better
                                            content on a consistent basis.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-list-ol"></i>
                                        </div>
                                        <h4>
                                            Talking Points </h4>
                                        <p class="margin-bottom-0">Write short, simple and informative points for the
                                            subheadings of your article</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-align-justify"></i>
                                        </div>
                                        <h4>
                                            Paragraph Writer </h4>
                                        <p class="margin-bottom-0">Perfectly structured paragraphs that are easy to read
                                            and packed with persuasive words.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-1">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                        <h4>
                                            Content Rephrase </h4>
                                        <p class="margin-bottom-0">Rephrase your content in a different voice and style
                                            to appeal to different readers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>General Writing</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-text-width"></i>
                                        </div>
                                        <h4>
                                            Text Extender </h4>
                                        <p class="margin-bottom-0">Extend short sentences into more descriptive and
                                            interesting ones.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-text-width"></i>
                                        </div>
                                        <h4>
                                            Content Shorten </h4>
                                        <p class="margin-bottom-0">Short your content in a different voice and style to
                                            appeal to different readers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-quora"></i>
                                        </div>
                                        <h4>
                                            Quora Answers </h4>
                                        <p class="margin-bottom-0">Answers to Quora questions that will position you as
                                            an authority.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-child"></i>
                                        </div>
                                        <h4>
                                            Summarize for a 2nd grader </h4>
                                        <p class="margin-bottom-0">Translates difficult text into simpler concepts.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-heart-o"></i>
                                        </div>
                                        <h4>
                                            Stories <span class="dashboard-status-button yellow"><i class="fa fa-gift"></i>
                                                Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Engaging and persuasive stories that will capture
                                            your reader's attention and interest.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-list"></i>
                                        </div>
                                        <h4>
                                            Bullet Point Answers </h4>
                                        <p class="margin-bottom-0">Precise and informative bullet points that provide
                                            quick and valuable answers to your customers' questions.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-tasks"></i>
                                        </div>
                                        <h4>
                                            Definition </h4>
                                        <p class="margin-bottom-0">A definition for a word, phrase, or acronym that's
                                            used often by your target buyers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <h4>
                                            Answers </h4>
                                        <p class="margin-bottom-0">Instant, quality answers to any questions or concerns
                                            that your audience might have.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-question-circle"></i>
                                        </div>
                                        <h4>
                                            Questions </h4>
                                        <p class="margin-bottom-0">A tool to create engaging questions and polls that
                                            increase audience participation and engagement.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-sort-alpha-desc"></i>
                                        </div>
                                        <h4>
                                            Passive to Active Voice </h4>
                                        <p class="margin-bottom-0">Easy and quick solution to converting your passive
                                            voice sentences into active voice sentences.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        <h4>
                                            Pros and Cons </h4>
                                        <p class="margin-bottom-0">List of the main benefits versus the most common
                                            problems and concerns.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                        <h4>
                                            Rewrite With Keywords <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Rewrite your existing content to include more
                                            keywords and boost your search engine rankings.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <h4>
                                            Emails </h4>
                                        <p class="margin-bottom-0">Professional-looking emails that help you engage
                                            leads and customers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <h4>
                                            Emails V2 <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Personalized email outreach to your target prospects
                                            that get better results.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-envelope-open-o"></i>
                                        </div>
                                        <h4>
                                            Email Subject Lines </h4>
                                        <p class="margin-bottom-0">Powerful email subject lines that increase open
                                            rates.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-bullhorn"></i>
                                        </div>
                                        <h4>
                                            Startup Name Generator </h4>
                                        <p class="margin-bottom-0">Generate cool, creative, and catchy names for your
                                            startup in seconds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                        <h4>
                                            Company Bios <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Short and sweet company bio that will help you
                                            connect with your target audience.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <h4>
                                            Company Mission </h4>
                                        <p class="margin-bottom-0">A clear and concise statement of your company's goals
                                            and purpose.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-align-left"></i>
                                        </div>
                                        <h4>
                                            Company Vision <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">A vision that attracts the right people, clients, and
                                            employees.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-3">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-language"></i>
                                        </div>
                                        <h4>
                                            Grammar Correction </h4>
                                        <p class="margin-bottom-0">Use the AI tool to check the grammar and correct the
                                            sentences.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Ecommerce</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-4">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <h4>
                                            Product Name Generator </h4>
                                        <p class="margin-bottom-0">Create creative product names from examples words.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-4">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <h4>
                                            Product Descriptions </h4>
                                        <p class="margin-bottom-0">Authentic product descriptions that will compel,
                                            inspire, and influence.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-4">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-amazon"></i>
                                        </div>
                                        <h4>
                                            Amazon Product Titles </h4>
                                        <p class="margin-bottom-0">Product titles that will make your product stand out
                                            in a sea of competition.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-4">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-amazon"></i>
                                        </div>
                                        <h4>
                                            Amazon Product Descriptions </h4>
                                        <p class="margin-bottom-0">Descriptions for Amazon products that rank on the
                                            first page of the search results.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-4">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-amazon"></i>
                                        </div>
                                        <h4>
                                            Amazon Product Features </h4>
                                        <p class="margin-bottom-0">Advantages and features of your products that will
                                            make them irresistible to shoppers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Social Media</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                        <h4>
                                            Social Media Post (Personal) </h4>
                                        <p class="margin-bottom-0">Write a social media post for yourself to be
                                            published on any platform.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                        <h4>
                                            Social Media Post (Business) <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Write a post for your business to be published on any
                                            social media platform.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-instagram"></i>
                                        </div>
                                        <h4>
                                            Instagram Captions </h4>
                                        <p class="margin-bottom-0">Captions that turn your images into
                                            attention-grabbing Instagram posts.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-instagram"></i>
                                        </div>
                                        <h4>
                                            Instagram Hashtags </h4>
                                        <p class="margin-bottom-0">Trending and highly relevant hashtags to help you get
                                            more followers and engagement.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <h4>
                                            Twitter Tweets </h4>
                                        <p class="margin-bottom-0">Generate tweets using AI, that are relevant and
                                            on-trend.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-youtube-play"></i>
                                        </div>
                                        <h4>
                                            YouTube Titles </h4>
                                        <p class="margin-bottom-0">Catchy titles that attract more views and increase
                                            the number of shares.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-youtube-play"></i>
                                        </div>
                                        <h4>
                                            YouTube Descriptions </h4>
                                        <p class="margin-bottom-0">Catchy and persuasive YouTube descriptions that help
                                            your videos rank higher.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-youtube-play"></i>
                                        </div>
                                        <h4>
                                            YouTube Outlines </h4>
                                        <p class="margin-bottom-0">Video outlines that are a breeze to create and
                                            uber-engaging.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                        <h4>
                                            LinkedIn Posts </h4>
                                        <p class="margin-bottom-0">Inspiring LinkedIn posts that will help you build
                                            trust and authority in your industry.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-5">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-film"></i>
                                        </div>
                                        <h4>
                                            TikTok Video Scripts </h4>
                                        <p class="margin-bottom-0">Video scripts that are ready to shoot and will make
                                            you go viral.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Ads And Marketing Tools</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-facebook-official"></i>
                                        </div>
                                        <h4>
                                            Facebook Ads </h4>
                                        <p class="margin-bottom-0">Facebook ad copies that make your ads truly stand
                                            out.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </div>
                                        <h4>
                                            Facebook Ads Headlines </h4>
                                        <p class="margin-bottom-0">Write catchy and convincing headlines to make your
                                            Facebook Ads stand out.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-google"></i>
                                        </div>
                                        <h4>
                                            Google Ad Titles </h4>
                                        <p class="margin-bottom-0">Creating ads with unique and appealing titles that
                                            entice people to click on your ad and purchase from your site.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-google"></i>
                                        </div>
                                        <h4>
                                            Google Ad Descriptions <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">The best-performing Google ad copy converts visitors
                                            into customers.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                        <h4>
                                            LinkedIn Ad Headlines </h4>
                                        <p class="margin-bottom-0">Attention-grabbing, click-inducing, and
                                            high-converting ad headlines for Linkedin.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                        <h4>
                                            LinkedIn Ad Descriptions </h4>
                                        <p class="margin-bottom-0">Professional and eye-catching ad descriptions that
                                            will make your product shine.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-2">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                        <h4>
                                            App and SMS Notifications </h4>
                                        <p class="margin-bottom-0">Notification messages for your apps, websites, and
                                            mobile devices that keep users coming back for more.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Website</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-6">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-google"></i>
                                        </div>
                                        <h4>
                                            SEO Meta Tags (Blog Post) <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">A set of optimized meta title and meta description
                                            tags that will boost your search rankings for your blog.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-6">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-google"></i>
                                        </div>
                                        <h4>
                                            SEO Meta Tags (Homepage) <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">A set of optimized meta title and meta description
                                            tags that will boost your search rankings for your home page.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-6">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-google"></i>
                                        </div>
                                        <h4>
                                            SEO Meta Tags (Product Page) <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">A set of optimized meta title and meta description
                                            tags that will boost your search rankings for your product page.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 ai-templates-category-title">
                            <h4>Other</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                        <h4>
                                            Tone Changer </h4>
                                        <p class="margin-bottom-0">Change the tone of your writing to match your
                                            audience and copy.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html" title="Not available in the free plan" data-tippy-placement="top">
                                <div class="dashboard-box ai-templates ai-templates-pro">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-music"></i>
                                        </div>
                                        <h4>
                                            Song Lyrics <span class="dashboard-status-button yellow"><i
                                                    class="fa fa-gift"></i> Pro</span>
                                        </h4>
                                        <p class="margin-bottom-0">Unique song lyrics that will be perfect for your next
                                            hit song.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-language"></i>
                                        </div>
                                        <h4>
                                            Translate </h4>
                                        <p class="margin-bottom-0">Translate your content into any language you want.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-question-circle-o"></i>
                                        </div>
                                        <h4>
                                            FAQs </h4>
                                        <p class="margin-bottom-0">Generate frequently asked questions based on your
                                            product description.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-question-circle-o"></i>
                                        </div>
                                        <h4>
                                            FAQ Answers </h4>
                                        <p class="margin-bottom-0">Generate creative answers to questions (FAQs) about
                                            your business or website.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 category-7">
                            <a href="login.html">
                                <div class="dashboard-box ai-templates ">
                                    <div class="content">
                                        <div class="ai-templates-icon">
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <h4>
                                            Testimonials / Reviews </h4>
                                        <p class="margin-bottom-0">Add social proof to your website by generating user
                                            testimonials.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ai-template-blocks-toggle-button">
                        <a href="#">
                            <span>Show More <i class="fa fa-chevron-down"></i></span>
                            <span>Show Less <i class="fa fa-chevron-up"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section border-top gray padding-top-65 padding-bottom-65">
            <div class="container margin-bottom-20">
                <div class="section-headline centered margin-top-0 margin-bottom-30">
                    <h3 class="margin-bottom-5">AI Images</h3>
                    <p>Here's our latest generated AI images.</p>
                </div>
                <div class="row image-lightbox">
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cccbe401a0.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cccbe401a0.png" alt="woman india"
                                    data-tippy-placement="top" title="woman india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cccbe06a8c.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cccbe06a8c.png" alt="woman india"
                                    data-tippy-placement="top" title="woman india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccbae6857e.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccbae6857e.png" alt="man india"
                                    data-tippy-placement="top" title="man india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccbae270b6.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccbae270b6.png" alt="man india"
                                    data-tippy-placement="top" title="man india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccbadd9b99.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccbadd9b99.png" alt="man india"
                                    data-tippy-placement="top" title="man india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccbada0a5f.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccbada0a5f.png" alt="man india"
                                    data-tippy-placement="top" title="man india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccbad6a1f5.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccbad6a1f5.png" alt="man india"
                                    data-tippy-placement="top" title="man india">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccb4900f39.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccb4900f39.png" alt="love
    " data-tippy-placement="top" title="love
    ">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646ccb0a3e8da.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646ccb0a3e8da.png" alt="man lithuania"
                                    data-tippy-placement="top" title="man lithuania">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cca4c18f79.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cca4c18f79.png" alt="man isreal"
                                    data-tippy-placement="top" title="man isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cca3dce116.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cca3dce116.png" alt="man isreal"
                                    data-tippy-placement="top" title="man isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cca0061494.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cca0061494.png" alt="man isreal"
                                    data-tippy-placement="top" title="man isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc99aa3462.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc99aa3462.png" alt="man isreal"
                                    data-tippy-placement="top" title="man isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc9763d0dc.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc9763d0dc.png" alt="woman isreal"
                                    data-tippy-placement="top" title="woman isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc78e4f005.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc78e4f005.png" alt="woman isreal"
                                    data-tippy-placement="top" title="woman isreal">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc5c5bfdc9.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc5c5bfdc9.png"
                                    alt="slim beautiful model in glasses with blue eyes and blonde long hair"
                                    data-tippy-placement="top"
                                    title="slim beautiful model in glasses with blue eyes and blonde long hair">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc57e91762.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc57e91762.png"
                                    alt="moon art with river" data-tippy-placement="top" title="moon art with river">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-6">
                        <div class="margin-bottom-30">
                            <a href="assets/images/ai_images/646cc56d1e3f8.png" target="_blank" class="ai-lightbox-image">
                                <img class="lazy-load rounded"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-original="assets/images/ai_images/small_646cc56d1e3f8.png" alt="Go Google now"
                                    data-tippy-placement="top" title="Go Google now">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section gray padding-top-65 padding-bottom-55">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Headline -->
                        <div class="section-headline centered margin-top-0 margin-bottom-5">
                            <h3>Testimonials</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Carousel -->
            <div class="fullwidth-carousel-container margin-top-20">
                <div class="testimonial-carousel testimonials">

                    <!-- Item -->
                    <div class="fw-carousel-review">
                        <div class="testimonial-box">
                            <div class="testimonial-avatar">
                                <img src="assets/images/testimonials/default_user.png" alt="Natasha">
                            </div>
                            <div class="testimonial-author">
                                <h4>Natasha</h4>
                                <span>Designer</span>
                            </div>
                            <div class="testimonial">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commo do consequat. Elitsed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua</div>
                        </div>
                    </div>
                    <div class="fw-carousel-review">
                        <div class="testimonial-box">
                            <div class="testimonial-avatar">
                                <img src="assets/images/testimonials/default_user.png" alt="Steve Roger">
                            </div>
                            <div class="testimonial-author">
                                <h4>Steve Roger</h4>
                                <span>Content Writer</span>
                            </div>
                            <div class="testimonial">Elitsed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip e</div>
                        </div>
                    </div>
                    <div class="fw-carousel-review">
                        <div class="testimonial-box">
                            <div class="testimonial-avatar">
                                <img src="assets/images/testimonials/default_user.png" alt="Tony Stark">
                            </div>
                            <div class="testimonial-author">
                                <h4>Tony Stark</h4>
                                <span>Social Marketing</span>
                            </div>
                            <div class="testimonial">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla paria tur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories Carousel / End -->

        </div>
        <!-- Testimonials / End -->
        <!-- Recent Blog Posts -->
        <div class="section border-top padding-top-65 padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Section Headline -->
                        <div class="section-headline margin-top-0 margin-bottom-45">
                            <h3>Recent Blog</h3>
                            <a href="blog.html" class="headline-link">View Blog</a>
                        </div>

                        <div class="row">
                            <!-- Blog Post Item -->
                            <div class="col-xl-4">
                                <a href="blog/3/combining-human-and-ai-writing-maximum-impact.html"
                                    class="blog-compact-item-container">
                                    <div class="blog-compact-item">
                                        <img src="assets/images/blog/859787155.jpg"
                                            alt="Combining Human and AI Writing for Maximum Impact">
                                        <span class="blog-item-tag">Admin</span>
                                        <div class="blog-compact-item-content">
                                            <ul class="blog-post-tags">
                                                <li>2 months ago</li>
                                            </ul>
                                            <h3>Combining Human and AI Writing for Maximum Impact</h3>
                                            <p>The combination of human and AI writing, especially when it comes to
                                                creating stories, has the poten...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="blog/2/exploring-benefits-ai-content-writing.html"
                                    class="blog-compact-item-container">
                                    <div class="blog-compact-item">
                                        <img src="assets/images/blog/1447820747.png"
                                            alt="Exploring the Benefits of AI in Content Writing">
                                        <span class="blog-item-tag">Admin</span>
                                        <div class="blog-compact-item-content">
                                            <ul class="blog-post-tags">
                                                <li>2 months ago</li>
                                            </ul>
                                            <h3>Exploring the Benefits of AI in Content Writing</h3>
                                            <p>As businesses of all sizes strive for success, leveraging technology is
                                                becoming increasingly import...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="blog/1/ai-assisted-content-writing-future.html"
                                    class="blog-compact-item-container">
                                    <div class="blog-compact-item">
                                        <img src="assets/images/blog/947029049.png"
                                            alt="AI-assisted content writing is the future">
                                        <span class="blog-item-tag">Admin</span>
                                        <div class="blog-compact-item-content">
                                            <ul class="blog-post-tags">
                                                <li>2 months ago</li>
                                            </ul>
                                            <h3>AI-assisted content writing is the future</h3>
                                            <p>With the dawn of technology, Artificial Intelligence (AI) has been
                                                rapidly transforming the content ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Blog post Item / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Blog Posts / End -->
        <div class="section gray border-top padding-top-45 padding-bottom-45">
            <!-- Logo Carousel -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Carousel -->
                        <div class="col-md-12">
                            <div class="logo-carousel">
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-01.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-02.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-03.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-04.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-05.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/partner/logo-carousel-06.png">
                                </div>
                            </div>
                        </div>
                        <!-- Carousel / End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="footer-middle-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="footer-logo">
                                <img src="../assets/images/logo/3.png" alt="Footer Logo">
                            </div>
                            <p>Aenean sodales mattis augue. Morbi euismod, felis at volutpat volutpat, quam lectus
                                porttitor massa, tur ex a neque pulvinar pulvinar.</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h3>My Account</h3>
                                <ul>
                                    <li><a href="route('login')">Login</a></li>
                                    <li><a href="route('register')">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h3>Helpful Links</h3>
                                <ul>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-rows-left">
                                <div class="footer-row">
                                    <span class="footer-copyright-text">Copyright © 2023 Bylancer, All right
                                        reserved</span>
                                </div>
                            </div>
                            <div class="footer-rows-right">
                                <div class="footer-row">
                                    <ul class="footer-social-links">
                                        <li><a href="https://www.facebook.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://pinterest.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-pinterest"></i></a></li>
                                    <li><a href="https://www.youtube.com/" target="_blank" rel="nofollow"><i
                                                class="fa fa-youtube"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- wrapper end -->


</template>

<style></style>
