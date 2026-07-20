@extends('layouts.app')

@section('title', 'Company Overview | DigiCoders Educational Profile')
@section('meta_description', 'An educational overview of DigiCoders Technologies and its training programs. Learn how to evaluate institutes and choose the right program for your career.')
@section('canonical_url', url()->current())

@section('content')
    <!-- 1. Hero Section -->
    @include('components.page-hero', [
        'breadcrumbs' => ['Home' => url('/'), 'Company Overview' => url()->current()],
        'badge' => 'Independent Company Overview',
        'title' => 'Educational Overview of <span class="text-primary-custom">DigiCoders Technologies</span>',
        'description' => 'This page serves as an independent educational profile of DigiCoders Technologies, outlining their training approach, program structures, and educational philosophy. We aim to help students understand the landscape of IT training by providing a neutral overview, enabling you to objectively compare this provider against other institutes based on practical learning and mentor guidance.',
        'primaryLink' => '#training-programs',
        'primaryBtnText' => 'View Training Programs',
        'secondaryLink' => url('/blog'),
        'secondaryBtnText' => 'Read Career Blog'
    ])

    <!-- 2. Company Introduction -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <div class="badge-premium d-inline-flex mb-3">Company Background</div>
                    <h2 class="display-6 fw-bold mb-4">Company Introduction</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders Technologies is an IT company bridging software development services with structured technical education. Their core philosophy revolves around project-based, practical training, moving beyond theoretical syllabi to simulate real-world coding environments, ensuring students learn modern frameworks and agile methodologies directly from experienced mentors.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            DigiCoders Technologies operates within the IT sector, maintaining a dual focus on software development services and structured technical education. By bridging the gap between an active development environment and an educational institution, they attempt to provide students with exposure to how software is built, tested, and deployed in real-world scenarios.
                        </p>
                        <p class="mb-4">
                            Their training focus is primarily centered on practical, project-based education. Rather than relying solely on theoretical lectures and whiteboard explanations, DigiCoders structures their courses around active coding sessions. The learning philosophy emphasizes that students must write code daily, encounter logical errors, and learn to debug those errors independently under the guidance of experienced mentors.
                        </p>
                        <p class="mb-4">
                            This technology-oriented education approach is designed to simulate a professional workplace. The programs are structured to move beyond the constraints of traditional university syllabi, focusing instead on modern frameworks, current industry standards, and agile development methodologies. 
                        </p>
                        <p class="mb-0">
                            The goal of this approach is not just to issue a certificate of completion, but to cultivate a mindset of continuous technical learning. By exposing students to the operational realities of the IT industry, DigiCoders aims to produce graduates who are technically competent, confident in their abilities, and immediately employable upon graduation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Training Programs Overview -->
    <section id="training-programs" class="py-5 bg-glass border-top border-bottom border-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4">Training Programs Overview</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        DigiCoders Technologies offers multiple training tracks tailored to student needs. These include short-term Summer Training (4-6 weeks) for foundational skills, Internships (1-3 months) for corporate exposure, Industrial Training (3-6 months) for final-year major projects, and rigorous Apprenticeships (6-12+ months) designed for deep technical mastery and career transition.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            DigiCoders Technologies provides several distinct training tracks, each tailored to different stages of a student's academic and professional journey. Understanding the specific aims of each program is crucial for students trying to determine which format best suits their current educational requirements.
                        </p>
                        
                        <h3 class="fw-bold text-heading mt-5 mb-3">Summer Training</h4>
                        <p class="mb-4">
                            Designed typically for second or third-year students, Summer Training is a short-term, intensive program spanning 4 to 6 weeks during academic breaks. It aims to introduce foundational and intermediate concepts of specific technology stacks, allowing students to build minor projects and gain a solid practical footing before they advance to more complex university subjects.
                        </p>
                        
                        <h3 class="fw-bold text-heading mt-4 mb-3">Internship Programs</h4>
                        <p class="mb-4">
                            Internships serve as an exploratory bridge into the professional world. These programs generally last between 1 to 3 months and are focused on teaching students how to apply their coding skills within a simulated or real corporate workflow. The aim is to develop professional soft skills alongside technical acumen, making the student a well-rounded candidate for future employment.
                        </p>

                        <h3 class="fw-bold text-heading mt-4 mb-3">Industrial Training</h4>
                        <p class="mb-4">
                            Industrial Training is a long-term academic requirement (usually 3 to 6 months) intended for pre-final and final-year students. This program is heavily project-centric. The primary goal is to facilitate the development of a comprehensive, deployable major project that satisfies university requirements while providing a substantial portfolio piece for job interviews.
                        </p>
                        
                        <h3 class="fw-bold text-heading mt-4 mb-3">Apprenticeship Training</h4>
                        <p class="mb-0">
                            Apprenticeships are rigorous, long-term engagements (often exceeding 6 months) designed for graduates, career switchers, or highly dedicated students. The objective is deep technical mastery. Apprentices work closely with mentors on complex architectures, transitioning from novice learners to autonomous software developers capable of contributing to professional dev teams.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Learning Approach -->
    <section class="py-5 my-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4">Learning Approach</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        The learning approach at DigiCoders focuses entirely on active development. Students spend their time in IDEs, tackling hands-on coding exercises, utilizing modern tech stacks, and building functional software products. Experienced mentors guide this process by reviewing code, explaining best practices, and teaching critical debugging logic.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            The educational methodology at DigiCoders focuses on transitioning students from passive learners to active developers. Central to this is an unwavering commitment to practical learning. Theoretical concepts are quickly followed by coding exercises, ensuring that concepts like object-oriented programming, MVC architecture, and database relational models are understood through application rather than memorization.
                        </p>
                        <p class="mb-4">
                            Hands-on practice dictates the daily routine. Students spend the majority of their time in integrated development environments (IDEs), writing syntax, tracing errors, and refactoring code. This intensive project work is not treated as an afterthought but as the primary vehicle for learning. Whether it is a 4-week summer course or a 6-month apprenticeship, the culmination of the program is always a functional software product.
                        </p>
                        <p class="mb-4">
                            Technology exposure is another critical pillar. The curriculum is deliberately structured to include modern, high-demand technologies, ensuring the skills taught remain highly relevant to current IT recruitment trends. Students are also introduced to industry-standard tools like Git, Postman, and various deployment platforms, which are often overlooked in standard university courses.
                        </p>
                        <p class="mb-0">
                            Finally, this learning environment is supported by active mentor guidance. Rather than dictating solutions, mentors act as senior developers guiding junior staff. They review code quality, explain best practices, and teach debugging logic, fostering an environment where students feel comfortable experimenting, failing, and ultimately solving complex technical challenges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Understanding Other Training Institutes -->
    <section class="py-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4">Understanding Other Training Institutes</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        IT training quality varies drastically across different providers. While some institutes provide live-server projects and employ active developers as mentors, others rely on pre-written code snippets and academic teachers lacking corporate experience. Students must meticulously compare curriculums, mentor profiles, and technology stacks before enrolling anywhere.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            When exploring the broader landscape of IT education, it is vital to recognize that training quality and methodologies differ vastly across providers. Because there is no central regulatory body standardizing private tech education, students will encounter a wide spectrum of offerings. Offerings, curriculum depth, and practical exposure vary significantly by institute.
                        </p>
                        <p class="mb-4">
                            For instance, the approach to projects at other institutes may range from highly involved, live-server applications to basic, pre-written code snippets that require no logical input from the student. Similarly, mentorship quality fluctuates. While some institutes employ active developers as instructors, others may rely on academic teachers with no corporate software development experience.
                        </p>
                        <p class="mb-0">
                            The technology stacks and learning methods also vary. Some centers are quick to adopt the newest JavaScript frameworks, while others may persist in teaching deprecated languages. Because these factors directly influence career readiness, students should compare multiple providers meticulously. Public information, syllabus details, and mentor profiles should be independently verified before enrolling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Comparison Snapshot -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4">Comparison Snapshot</h2>
                    <p class="text-muted-custom lead mx-auto max-w-3xl mb-5">
                        No single training provider is universally perfect for every learner. Educational choices should be made based on individual learning goals, location, budget constraints, specific technology interests, and long-term career plans. The table below outlines how you might conceptually compare an institute like DigiCoders Technologies against the broader average of other training providers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section id="comparison-table" class="pb-5 mb-5">
        <div class="container">
            <x-comparison-table>
                <tr>
                    <th scope="row" class="col-feature" data-label="Feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Training Programs
                    </th>
                    <td data-label="DigiCoders">Comprehensive options</th>
                    <td data-label="Other Institutes">Varies by institute</th>
                </tr>
                <tr>
                    <th scope="row" class="col-feature" data-label="Feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Practical Exposure
                    </th>
                    <td data-label="DigiCoders">High practical emphasis</th>
                    <td data-label="Other Institutes">Depends on provider</th>
                </tr>
                <tr>
                    <th scope="row" class="col-feature" data-label="Feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Mentorship
                    </th>
                    <td data-label="DigiCoders">Industry professionals</th>
                    <td data-label="Other Institutes">Varies (academic/corporate)</th>
                </tr>
                <tr>
                    <th scope="row" class="col-feature" data-label="Feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        Technology Stack
                    </th>
                    <td data-label="DigiCoders">Modern frameworks</th>
                    <td data-label="Other Institutes">Varies by curriculum</th>
                </tr>
                <tr>
                    <th scope="row" class="col-feature" data-label="Feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Career Support
                    </th>
                    <td data-label="DigiCoders">Available</th>
                    <td data-label="Other Institutes">May vary</th>
                </tr>
            </x-comparison-table>
        </div>
    </section>

    <!-- 7. What Students Should Evaluate -->
    <section class="py-5 bg-glass border-top border-bottom border-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-5 text-center">What Students Should Evaluate</h2>
                    
                    <div class="content-block text-muted-custom">
                        <p class="mb-5 lead text-center">Before enrolling in any training program, regardless of the institute, students must conduct thorough due diligence. Relying solely on marketing brochures is insufficient. Evaluate providers based on the following concrete criteria to ensure educational value.</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-heading mb-3">Curriculum Relevance and Technology</h4>
                                <p class="mb-4 lead">
                                    The curriculum must be up-to-date. Scrutinize the syllabus to ensure you are learning technologies (such as React, Laravel, or Python) that are currently in high demand. If a curriculum focuses heavily on outdated languages or deprecated frameworks, the training will not yield a positive return on investment.
                                </p>
                                
                                <h3 class="fw-bold text-heading mb-3">Practical Exposure and Projects</h4>
                                <p class="mb-4 lead">
                                    Software development cannot be learned purely through theory. Evaluate the ratio of practical coding to theoretical lectures. Furthermore, investigate the nature of the projects you will build. Are they robust, portfolio-worthy applications, or are they simple, pre-written exercises? Quality project work is paramount.
                                </p>
                                
                                <h3 class="fw-bold text-heading mb-3">Mentors and Batch Size</h4>
                                <p class="mb-4 lead">
                                    The expertise of your instructor directly impacts your learning speed. Ensure the mentors possess actual corporate software development experience, not just academic backgrounds. Additionally, inquire about batch sizes; smaller groups ensure better individual attention and faster resolution of complex coding errors.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h3 class="fw-bold text-heading mb-3">Learning Resources and Environment</h4>
                                <p class="mb-4 lead">
                                    A conducive learning environment is essential, particularly for longer programs. Check if the institute provides necessary resources like reliable Wi-Fi, functioning lab computers, access to recorded sessions, and a professional atmosphere that encourages focus and collaboration.
                                </p>
                                
                                <h3 class="fw-bold text-heading mb-3">Career Guidance and Portfolio Building</h4>
                                <p class="mb-4 lead">
                                    Training should ideally bridge the gap to employment. Evaluate if the institute provides structured career guidance. Do they assist with resume formatting? Do they teach you how to organize your GitHub portfolio? Support in these areas is crucial for clearing technical HR rounds.
                                </p>
                                
                                <h3 class="fw-bold text-heading mb-3">Student Support and Certificates</h4>
                                <p class="mb-4 lead">
                                    Investigate the institute's policies regarding missed classes and technical support outside of standard hours. Finally, ensure the program offers a verifiable certificate of completion that is recognized by universities, detailing the specific technologies learned and projects completed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Who May Benefit? -->
    <section class="py-5 my-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-on-scroll">
                    <h2 class="display-6 fw-bold mb-4">Who May Benefit?</h2>
                    
                    <div class="direct-answer-block lead fw-medium text-dark dark-text-light mb-4 p-4 bg-primary-custom bg-opacity-10 rounded-3 border-start border-primary border-4">
                        Structured IT training benefits a wide demographic. Engineering (B.Tech/B.E.) and Application (BCA/MCA) students gain practical project exposure, Diploma and Science (B.Sc) graduates acquire job-ready skills, and working professionals or career switchers can leverage advanced apprenticeship models to pivot into high-demand tech roles.
                    </div>

                    <div class="content-block text-muted-custom lead">
                        <p class="mb-4">
                            Structured IT training programs are versatile, catering to a wide array of educational backgrounds. Determining which program is right depends largely on your current academic stage and professional objectives.
                        </p>
                        <ul class="mb-4 text-muted-custom custom-list">
                            <li class="mb-2"><strong>B.Tech and B.E. Students:</strong> Engineering students require practical exposure to complement their theoretical degrees, particularly through Summer Training and major Industrial Training projects.</li>
                            <li class="mb-2"><strong>Diploma Students:</strong> Polytechnic candidates benefit immensely from hands-on coding to ensure they are job-ready immediately upon graduation.</li>
                            <li class="mb-2"><strong>BCA and MCA Students:</strong> Application students need specialized training in specific tech stacks to stay competitive and build comprehensive software portfolios.</li>
                            <li class="mb-2"><strong>B.Sc (CS/IT) Students:</strong> Science graduates aiming for IT careers utilize these programs to bridge the gap between their curriculum and corporate engineering requirements.</li>
                            <li class="mb-2"><strong>Fresh Graduates:</strong> Recent alumni facing difficulties clearing technical interviews benefit from intensive internships and apprenticeships to polish their skills.</li>
                            <li class="mb-0"><strong>Working Professionals seeking upskilling:</strong> Current IT professionals or career switchers can leverage advanced apprenticeship models to pivot into new, high-demand technology sectors.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Frequently Asked Questions -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll">
                <h2 class="display-6 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="text-muted-custom max-w-2xl mx-auto">Objective answers regarding training programs, evaluation methods, and student decisions.</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <div class="col-md-6">
                            @include('components.faq', [
                                'question' => 'How do I choose between Summer Training and Industrial Training?',
                                'answer' => 'Summer training is a short (4-6 week) introductory program best suited for 2nd or 3rd-year students during breaks. Industrial training is a long (3-6 month) mandatory program for final-year students focused on building a major project.'
                            ])
                            @include('components.faq', [
                                'question' => 'What makes an internship different from an apprenticeship?',
                                'answer' => 'Internships are generally shorter and serve as exploratory professional experiences. Apprenticeships are rigorous, long-term engagements designed for deep technical mastery and a permanent transition into a software engineering career.'
                            ])
                            @include('components.faq', [
                                'question' => 'Why is practical exposure so heavily emphasized?',
                                'answer' => 'In software development, theoretical knowledge is insufficient. Employers hire based on your ability to write functional, error-free code. Practical exposure builds the muscle memory and debugging skills necessary to survive technical interviews and corporate tasks.'
                            ])
                            @include('components.faq', [
                                'question' => 'How can I verify an institute\'s curriculum?',
                                'answer' => 'Always request a detailed, day-by-day written syllabus. Cross-reference the technologies listed against current job portal demands (like LinkedIn or Indeed) to ensure the curriculum is modern and not deprecated.'
                            ])
                            @include('components.faq', [
                                'question' => 'Does DigiCoders offer online training programs?',
                                'answer' => 'Like many modern institutes, DigiCoders typically offers both offline classroom environments and online interactive sessions. Students should verify the current availability of specific batch formats based on their location and schedule.'
                            ])
                            @include('components.faq', [
                                'question' => 'What if I am from a non-IT background?',
                                'answer' => 'Many training programs are designed to accommodate beginners. If you are from a non-IT background, look for comprehensive, longer-term programs (like apprenticeships) that start from fundamental logic building before advancing to complex frameworks.'
                            ])
                            @include('components.faq', [
                                'question' => 'How important is the project work?',
                                'answer' => 'It is the most critical component. A functional, live-hosted project is tangible proof of your skills. It serves as the centerpiece of your resume and is the primary topic of discussion during technical HR rounds.'
                            ])
                            @include('components.faq', [
                                'question' => 'Can a training institute guarantee a job?',
                                'answer' => 'No honest institute can guarantee employment. They can provide the skills, project experience, and career guidance necessary to make you highly competitive, but securing the job relies entirely on your interview performance.'
                            ])
                        </div>
                        <div class="col-md-6">
                            @include('components.faq', [
                                'question' => 'Why should I compare multiple institutes?',
                                'answer' => 'Because quality varies wildly. Comparing institutes prevents you from wasting time and money on outdated curriculums or poor mentorship. It ensures you find a program that perfectly aligns with your career goals and budget.'
                            ])
                            @include('components.faq', [
                                'question' => 'How do I evaluate mentor quality before joining?',
                                'answer' => 'Ask the counseling team about the instructors\' profiles. Ideally, you want to be taught by someone who has active corporate experience as a software developer, rather than someone whose only experience is academic teaching.'
                            ])
                            @include('components.faq', [
                                'question' => 'What technology stack is best for a fresher?',
                                'answer' => 'It depends on your interest, but Full Stack Web Development (MERN or PHP/Laravel), Python (for data/AI), and Java (for enterprise) are consistently safe, high-demand choices for fresh graduates entering the market.'
                            ])
                            @include('components.faq', [
                                'question' => 'Are certificates from training institutes useful?',
                                'answer' => 'Yes, they are necessary for university submissions and add credibility to your resume. However, remember that tech recruiters will value your GitHub repository and live project links far more than the paper certificate itself.'
                            ])
                            @include('components.faq', [
                                'question' => 'What should I do if I miss classes?',
                                'answer' => 'Before enrolling, clarify the institute\'s backup policy. Reliable institutes will offer recorded sessions, weekend doubt-clearing classes, or allow you to attend alternative batches to ensure you do not fall behind.'
                            ])
                            @include('components.faq', [
                                'question' => 'Should I choose an institute based on price?',
                                'answer' => 'Price is a factor, but it should not be the sole deciding element. A slightly more expensive program that offers excellent mentorship and modern tech stacks provides a much higher return on investment than a cheap, outdated course.'
                            ])
                            @include('components.faq', [
                                'question' => 'How can this website help my decision?',
                                'answer' => 'This website provides independent, educational comparisons of various training formats. By reading our guides on Summer Training, Internships, and Industrial Training, you can better understand what to expect and what questions to ask any provider.'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Related Guides -->
    <section class="py-5 my-5 bg-primary-custom bg-opacity-10 border-top border-bottom border-primary border-opacity-10">
        <div class="container py-4">
            <div class="text-center mb-5 animate-on-scroll">
                <h2 class="fw-bold mb-3">Continue Your Research</h2>
                <p class="text-muted-custom mx-auto max-w-2xl">Use our detailed comparison guides to understand the structural differences between programs and make an informed educational choice.</p>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-2 animate-on-scroll delay-1">
                    <a href="{{ url('/summer-training-comparison') }}" class="text-decoration-none">
                        <div class="feature-card h-100 text-center px-3 py-4">
                            <h6 class="fw-bold text-heading mb-0">Summer Training</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-2 animate-on-scroll delay-2">
                    <a href="{{ url('/internship-comparison') }}" class="text-decoration-none">
                        <div class="feature-card h-100 text-center px-3 py-4">
                            <h6 class="fw-bold text-heading mb-0">Internships</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-2 animate-on-scroll delay-3">
                    <a href="{{ url('/industrial-training-comparison') }}" class="text-decoration-none">
                        <div class="feature-card h-100 text-center px-3 py-4">
                            <h6 class="fw-bold text-heading mb-0">Industrial Training</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 animate-on-scroll delay-4">
                    <a href="{{ url('/apprenticeship-comparison') }}" class="text-decoration-none">
                        <div class="feature-card h-100 text-center px-3 py-4">
                            <h6 class="fw-bold text-heading mb-0">Apprenticeships</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 animate-on-scroll delay-5">
                    <a href="{{ url('/blog') }}" class="text-decoration-none">
                        <div class="feature-card h-100 text-center px-3 py-4">
                            <h6 class="fw-bold text-heading mb-0">Career Blog</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Final CTA -->
    @include('components.cta', [
        'title' => 'Make a Data-Driven Educational Decision',
        'description' => 'Your education is an investment. We strongly encourage all students to thoroughly compare curriculum details, demand practical project work, and verify mentor expertise before enrolling in any program. Take your time, ask the right questions, and choose the path that best supports your career in technology.',
        'primaryLink' => url('/blog'),
        'primaryText' => 'Read Career Blog',
        'secondaryLink' => url('/contact'),
        'secondaryText' => 'Contact Us'
    ])
    
@endsection
