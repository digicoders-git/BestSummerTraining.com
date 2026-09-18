@extends('layouts.app')

@section('title', 'Data Science & Machine Learning Training Comparison in Lucknow | DigiCoders vs Others')
@section('meta_description', 'Compare Data Science, AI, Machine Learning, Python, NumPy & Pandas training in Lucknow. Evaluate practical modeling & mentorship at DigiCoders.')
@section('canonical_url', url()->current())

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Data Science & Machine Learning Training Course",
  "description": "Practical Data Science and Artificial Intelligence course covering Python, NumPy, Pandas, Matplotlib, Scikit-Learn, and Machine Learning algorithms.",
  "provider": {
    "@type": "Organization",
    "name": "DigiCoders Technologies",
    "sameAs": "https://thedigicoders.com"
  }
}
</script>
@endsection

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Data Science Training' => url()->current()],
        'badge' => 'AI & Data Analytics Track',
        'title' => 'Compare <span class="text-primary-custom">Data Science Training</span> objectively',
        'description' => 'Data Science and Artificial Intelligence are revolutionizing tech industries. Compare hands-on machine learning modeling, data analysis, and mentor guidance.',
        'primaryLink' => '#comparison-table',
        'primaryBtnText' => 'View Comparison Matrix',
        'secondaryLink' => url('/industrial-training-comparison'),
        'secondaryBtnText' => 'Industrial Training'
    ])

    <!-- 2. Program Overview -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">AI & Analytics</div>
                    <h2 class="display-6 fw-bold mb-4">Practical Data Science & ML</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders Data Science program covers Python data manipulation (Pandas, NumPy), data visualization (Matplotlib, Seaborn), machine learning algorithms (Scikit-Learn), and model deployment.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Comparison Matrix -->
    <section class="py-5 bg-glass border-top border-bottom border-light" id="comparison-table">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4 text-center">Data Science Comparison Matrix</h2>
                    
                    <div class="table-responsive shadow rounded-3 overflow-hidden bg-surface">
                        <table class="table table-hover align-middle mb-0" style="min-width: 800px;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" style="width: 25%;" class="py-3 px-4">Criteria</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">DigiCoders Technologies</th>
                                    <th scope="col" style="width: 37.5%;" class="py-3 px-4">Typical Institutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Stack & Libraries</td>
                                    <td class="px-4 py-3">Python, Pandas, NumPy, Scikit-Learn, Matplotlib, SQL queries & Streamlit model deployment</td>
                                    <td class="px-4 py-3">Theoretical math slides without practical Python data pipelines</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-4 py-3">Real Datasets</td>
                                    <td class="px-4 py-3">Live Kaggle datasets, sales forecasting models, customer churn predictors</td>
                                    <td class="px-4 py-3">Toy Iris / Titanic dataset copy-pasting</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQs -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4 text-center">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        @include('components.faq', [
                            'id' => 'faq1',
                            'question' => 'Is advanced math mandatory for Data Science?',
                            'answer' => 'Basic statistics and linear algebra concepts are helpful, but our curriculum explains practical implementations clearly using Python libraries.',
                            'parent' => 'faqAccordion'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA -->
    @include('components.cta', [
        'title' => 'Start Your Data Science Journey',
        'description' => 'Learn data engineering, analytics, and predictive modeling with real industry datasets.',
        'primaryLink' => url('/contact'),
        'primaryText' => 'Book Demo Class',
        'secondaryLink' => url('/blog'),
        'secondaryText' => 'Read Tech Articles'
    ])
@endsection
