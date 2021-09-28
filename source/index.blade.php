@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl px-6 py-10 mx-auto md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="mt-4 font-light">{{ $page->siteDescription }}</h2>

            <p class="text-lg">scrawl (/skrôl/), verb: <br class="hidden sm:block">To write in a hurried or careless way.</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="px-6 py-2 mr-4 font-normal text-white bg-blue-500 rounded hover:bg-blue-600 hover:text-white">Get Started</a>

                <a href="https://github.com/ProjektGopher/Scrawl" title="GitHub Repository" class="px-6 py-2 font-normal text-blue-900 bg-gray-400 rounded hover:bg-gray-600 hover:text-white">View Source</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="-mx-4 md:flex">
        <div class="px-2 mx-3 mb-8 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="w-12 h-12" alt="window icon">

            <h3 id="intro-routing" class="mb-0 text-2xl text-blue-900">Automatic Routing <br>and Views</h3>

            <p>Scrawl automatically registers routes and views for published blog entries, and renders them using the Tailwind CSS Typography plugin for beautiful prose.</p>
        </div>

        <div class="px-2 mx-3 mb-8 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="w-12 h-12" alt="terminal icon">

            <h3 id="intro-markdown" class="mb-0 text-2xl text-blue-900">Use Markdown for <br>forward compatibility</h3>

            <p>Markdown is the web’s leading format for writing articles, blog posts, documentation, and more. Scrawl makes it painless to move your Markdown content.</p>
        </div>

        <div class="px-2 mx-3 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="w-12 h-12" alt="stack icon">

            <h3 id="intro-write" class="mb-0 text-2xl text-blue-900">Quit procrastinating. <br>Just get writing.</h3>

            <p>We've taken care of all the tedious stuff involed in getting a super simple blog set up on a Laravel site. Don't reinvent the wheel. Just write.</p>
        </div>
    </div>
</section>
@endsection
