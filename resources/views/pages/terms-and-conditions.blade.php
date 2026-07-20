@extends('layouts.app')

@section('title', 'Terms & Conditions | Educational Training Comparison Platform')
@section('meta_description', 'Review the Terms & Conditions governing the use of our educational comparison platform, content ownership, and acceptable use policies.')
@section('canonical_url', url()->current())

@section('content')
    @include('components.breadcrumbs', ['breadcrumbs' => ['Home' => url('/'), 'Terms & Conditions' => url()->current()]])

    <section class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="premium-card p-4 p-md-5 bg-white dark-bg-dark border-0 shadow-sm">
                        <h1 class="fw-bold mb-4 text-primary-custom">Terms & Conditions</h1>
                        <p class="text-muted-custom mb-5">Last Updated: {{ date('F d, Y') }}</p>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">1. Website Usage</h4>
                            <p class="text-muted-custom">By accessing this educational comparison platform, you agree to be bound by these Terms & Conditions. The website is provided for informational and educational purposes only. If you do not agree with any part of these terms, you must not use this website.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">2. Content Ownership</h4>
                            <p class="text-muted-custom">All content, design, layouts, text, graphics, and underlying source code on this website are owned by or licensed to us. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">3. Acceptable Use</h4>
                            <p class="text-muted-custom">You agree to use our website only for lawful purposes. You must not use the website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website.</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">4. External Links</h4>
                            <p class="text-muted-custom">From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold mb-3">5. Disclaimer Reference</h4>
                            <p class="text-muted-custom">Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements. Please read our full <a href="{{ url('/disclaimer') }}" class="text-primary-custom text-decoration-none">Disclaimer</a>.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="fw-bold mb-3">6. Changes to Content</h4>
                            <p class="text-muted-custom mb-0">The content of the pages of this website is for your general information and use only. It is subject to change without notice. We aim to keep information updated but do not guarantee its absolute accuracy at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
