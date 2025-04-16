@extends('frontend.layouts.app')

@section('title', 'Careers - Join Our Team')

@section('content')
<link rel="stylesheet" href="{{ asset('css/careers.css') }}">



<section class="why-join container text-center">
    <h2>Why Work With Us?</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="benefit-box">
                <i class="fas fa-globe"></i>
                <h3>Global Exposure</h3>
                <p>Work with international clients on cutting-edge technology.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="benefit-box">
                <i class="fas fa-rocket"></i>
                <h3>Career Growth</h3>
                <p>Advance your career with training and mentorship.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="benefit-box">
                <i class="fas fa-laptop-house"></i>
                <h3>Remote & Hybrid</h3>
                <p>Flexible work options for better work-life balance.</p>
            </div>
        </div>
    </div>
</section>

<section class="openings container">
    <h2 class="text-center">Current Openings</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="job-card">
                <h3>Frontend Developer</h3>
                <p>Experience: 2+ years | Location: Remote</p>
                <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="job-card">
                <h3>Backend Developer</h3>
                <p>Experience: 3+ years | Location: Remote</p>
                <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="job-card">
                <h3>UI/UX Designer</h3>
                <p>Experience: 1+ years | Location: Hybrid</p>
                <a href="#" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<section class="apply text-center">
    <h2>Want to Work with Us?</h2>
    <p>Send your resume at <a href="mailto:careers@yourcompany.com">carrycodetechnology@gmail.com</a></p>
</section>

@endsection

<style>
.career-header {
    background: linear-gradient(to right, #800000, #a52a2a);
    padding: 60px 20px;
    color: white;
}

.why-join {
    padding: 50px 0;
}

.benefit-box {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.benefit-box i {
    font-size: 40px;
    color: #800000;
    margin-bottom: 10px;
}

.benefit-box:hover {
    transform: translateY(-5px);
}

.openings {
    padding: 50px 0;
}

.job-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.job-card:hover {
    transform: translateY(-5px);
}

.job-card h3 {
    color: #800000;
}

.btn-primary {
    background: #800000;
    border: none;
}

.btn-primary:hover {
    background: #a52a2a;
}


</style>
