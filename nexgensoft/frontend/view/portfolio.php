<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio #1</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
      <link rel="stylesheet" href="<?= assets('./css/style.css') ?>">
      <link rel="stylesheet" href="<?= assets('./css/media.css') ?>">
    </head>
  <body>
    <?php echo $header; ?>
    <section>
      <main>
        <!-- Featured work section -->
        <div class="container text-center mt-5" style="max-width: 950px">
          <!-- Cards Container with Border -->
          <div class="px-5 p-3 mt-3 rounded-2 border rounded">
            <h6 class="text-uppercase text-muted">Project we done</h6>
            <h2 class="fw-bold">Featured work</h2>
            <p class="text-muted mb-5">
              We're a web design agency creating next-level websites by
              <br />
              strategically blending user experience and brand storytelling.
            </p>
            <!-- Cards Row -->
            <div class="row g-4">
              <!-- Card 1 -->
              <div class="col-md-4">
                <div class="card h-100 border-0">
                  <img
                    src="<?= assets('images/portfolio-img-1.jpg') ?>"
                    class="card-img-top"
                    alt="Project 1"
                  />
                  <div class="card-body text-start">
                    <h5 class="card-title fw-bold">Chat GPT for Figma</h5>
                    <p class="card-text text-muted">Development</p>
                  </div>
                </div>
              </div>
              <!-- Card 2 -->
              <div class="col-md-4">
                <div class="card h-100 border-0">
                  <img
                    src="<?= assets('images/portfolio-img-5.jpg') ?>"
                    class="card-img-top"
                    alt="Project 2"
                  />
                  <div class="card-body text-start">
                    <h5 class="card-title fw-bold">Virtual reality</h5>
                    <p class="card-text text-muted">UI/UX Design</p>
                  </div>
                </div>
              </div>
              <!-- Card 3 -->
              <div class="col-md-4">
                <div class="card h-100 border-0">
                  <img
                    src="<?= assets('images/portfolio-img-4.jpg') ?>"
                    class="card-img-top"
                    alt="Project 3"
                  />
                  <div class="card-body text-start">
                    <h5 class="card-title fw-bold">AI avatar application</h5>
                    <p class="card-text text-muted">Web Development</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Case Study Button -->
            <div class="mt-4">
              <button
                class="btn btn-primary"
                style="background-color: #7a4eff; border-color: #7a4eff"
              >
                Read case study
              </button>
            </div>
          </div>
        </div>
      </main>
      <div class="container text-center mt-5" style="max-width: 950px">
        <div class="p-4 mt-3 rounded-2 border rounded">
          <div class="container mt-5">
            <h5 class="text-center text-muted">PORTFOLIO</h5>
            <h1 class="text-center portfolio-title">
              Handful of items from
              <span class="text-primary">my <br />portfolio.</span>
            </h1>
            <p class="text-center text-muted">
              Here are a handful of items from my portfolio over the last 13
              years.
            </p>

            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    JAMstack & Headless web development agency
                    <br />
                    <span class="badge bg-secondary">Figma</span>
                    <span class="badge bg-secondary">Bootstrap</span>
                    <img
                      src="<?= assets('images/1.jpg') ?>"
                      class="img-fluid mt-3"
                      alt="Project Image"
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  Banking and Finance landing page design
                  <br />
                  <div class="card-body">
                    <span class="badge bg-secondary">UI Design</span>
                    <span class="badge bg-secondary">Next.js</span>
                    <img
                      src="<?= assets('images/2.jpg') ?>"
                      class="img-fluid mt-3"
                      alt="Project Image"
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  Accounting software web app development
                  <br />
                  <div class="card-body">
                    <span class="badge bg-secondary">Web Development</span>
                    <span class="badge bg-secondary">React JS</span>
                    <img
                      src="<?= assets('images/3.jpg') ?>"
                      class="img-fluid mt-3"
                      alt="Project Image"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php echo $footer; ?>
    <script src="<?php echo assets('js/script.js') ?>" defer></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  </body>
</html>
