@extends('layouts.app')

@section('title', 'CapStation')

@section('content')
    {{-- Phase 1 foundation check. Replaced by the full landing page in Phase 4. --}}
    <section class="foundation-check container d-flex flex-column align-items-center justify-content-center gap-3 py-5">
        <img src="{{ asset('images/capstation-logo.png') }}"
             alt="CapStation"
             width="180" height="180"
             class="foundation-check__logo">

        <span class="foundation-check__badge">
            {{ app()->getLocale() === 'ar' ? 'المرحلة ١ — الأساس جاهز' : 'Phase 1 — Foundation ready' }}
        </span>

        <h1 class="mt-2">CapStation</h1>

        <p class="text-secondary mb-0">
            {{ app()->getLocale() === 'ar'
                ? 'منصة التشغيل الذكية للكباتن — قيد الإنشاء.'
                : 'The smart operations platform for captains — under construction.' }}
        </p>

        <div class="d-flex gap-2 mt-2">
            <a href="{{ url('/ar') }}" class="btn btn-sm btn-outline-secondary">العربية</a>
            <a href="{{ url('/en') }}" class="btn btn-sm btn-outline-secondary">English</a>
        </div>
    </section>
@endsection
