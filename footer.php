<!-- footer.php -->

<div class="container mt-5">
         <footer class="text-center text-white">
            <div class="container pt-4">
               <!-- MAIL -->
               <section class="mb-4">
                  <a
                     class=" btn-link btn-floating btn-lg  m-1"
                     href="mailto:awsjoaquinperez@gmail.com"
                     target="_blank"
                     role="button"
                     data-mdb-ripple-color="dark">
                  <i class="fa-solid fa-envelope mx-2 text-light"></i>
                  </a>
                  <!-- Linkedin -->
                  <a
                     class=" btn-link btn-floating btn-lg  m-1"
                     href="https://www.linkedin.com/in/joaquinperezortiz/"
                     target="_blank"
                     role="button"
                     data-mdb-ripple-color="dark"
                     >
                  <i class="fa-brands fa-linkedin mx-2 text-light"></i>
                  </a>
                  <!-- Github -->
                  <a
                     class=" btn-link btn-floating btn-lg  m-1"
                     href="https://github.com/Thraag?tab=repositories"
                     target="_blank"
                     role="button"
                     data-mdb-ripple-color="dark">
                  <i class="fa-brands fa-github mx-2 text-light"></i>
                  </a>
               </section>
            </div>
            <!-- Copyright -->
            <div class="text-center text-light p-3" >
               © 2024 Copyright:
               <a class="text-light" href="https://mdbootstrap.com/">www.awsjoaquinperez.com</a>
            </div>
         </footer>
      </div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.fade-in-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.5
    });
    
    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>

</body>
</html>

