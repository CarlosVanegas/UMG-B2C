  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        @if (!auth()->user() || \Request::is('static-sign-up'))
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://portafolio-carlos-vanegas.web.app" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-aws" aria-hidden="true"></span>
              </a>
              <a href="https://twitter.com/_CVanegas" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="https://www.instagram.com/cvanegass/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="https://www.linkedin.com/in/carlos-vanegas//" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-linkedin" aria-hidden="true"></span>
              </a>
              <a href="https://github.com/CarlosVanegas" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up'))
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
                <script>
                document.write(new Date().getFullYear())
              </script> Creado por
              <a style="color: #252f40;" href="https://portafolio-carlos-vanegas.web.app/" class="font-weight-bold ml-1" target="_blank">Carlos Vanegs</a>

            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
