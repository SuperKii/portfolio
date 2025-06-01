<section class="projects section" id="projects">
    <h2 class="section-title-1">
        <span>Projects.</span>
    </h2>

    <div class="projects-container container grid">
        @foreach ($dataProjects as $dp)
            <article class="projects-card">
                <div class="projects-image">
                    <img src="{{ asset('storage/' . $dp->image) }}" alt="image" class="projects-img">

                    <a href="" class="projects-button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Website</h3>
                    <h2 class="projects-title">{{ $dp->title }}</h2>

                    <p class="projects-description">
                        {{ $dp->description }}
                    </p>
                </div>

                <div class="projects-buttons">
                    <a href="{{ $dp->link_github }}" target="_blank" class="projects-link">
                        <i class="ri-github-line"></i> View
                    </a>
                    <a href="{{ $dp->link_web }}" target="_blank" class="projects-link">
                        <i class="ri-dribbble-line"></i> View
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</section>
