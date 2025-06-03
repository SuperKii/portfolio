<section class="contact section" id="contact">
    <div class="contact-container grid">
        <div class="contact-data">
            <h2 class="section-title-2">
                <span>Contact Me.</span>
            </h2>

            <p class="contact-description-1">
                Semua pesan pasti saya baca. Kirim aja pesannya, nanti saya balas secepatnya!
            </p>
            <div class="geometric-box"></div>
        </div>

        <div class="contact-mail">
            <h2 class="contact-title">Langsung aja kirim pesan ke saya!</h2>

            <form action="{{ route('storeMessage') }}" class="contact-form" method="POST">
                @csrf
                <div class="contact-group">
                    <div class="contact-box">
                        <input type="text" required class="contact-input" name="name" id="name"
                            placeholder="Your Name">
                        <label for="name" class="contact-label">Nama Kamu</label>
                    </div>
                    <div class="contact-box">
                        <input type="email" required class="contact-input" name="email" id="email"
                            placeholder="Email Address">
                        <label for="email" class="contact-label">Email</label>
                    </div>
                </div>

                <div class="contact-box">
                    <input type="text" required class="contact-input" name="subject" id="subject"
                        placeholder="Subject">
                    <label for="subject" class="contact-label">Judul</label>
                </div>

                <div class="contact-box contact-area">
                    <textarea required class="contact-input" name="message" id="message" placeholder="Message"></textarea>
                    <label for="message" class="contact-label">Pesan</label>
                </div>

                @if (Session::has('success'))
                    <p class="contact-message" id="contact_message">{{ Session::get('success') }}</p>
                @endif
                @if (Session::has('error'))
                    <p class="contact-message" id="contact_message">{{ Session::get('error') }}</p>
                @endif

                <button class="contact-button button" type="submit">
                    <i class="ri-send-plane-line"></i> Kirim Pesan
                </button>
            </form>
        </div>

        <div class="contact-social">
            <img src="{{ asset('landing/assets/img/curved-arrow.svg') }}')}}" alt=""
                class="contact-social-arrow">

            <div class="contact-social-data">
                <div class="">
                    <p class="contact-social-description-2">
                        Hubungi saya lewat media sosial.
                    </p>
                </div>

                <div class="contact-social-links">
                    <a href="" target="_blank" class="contact-social-link">
                        <i class="ri-facebook-circle-line"></i>
                    </a>
                    <a href="https://www.instagram.com/rz.rizki_/" target="_blank" class="contact-social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/rochmat-hidayah-rizki-956b21364/" target="_blank"
                        class="contact-social-link">
                        <i class="ri-linkedin-box-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
