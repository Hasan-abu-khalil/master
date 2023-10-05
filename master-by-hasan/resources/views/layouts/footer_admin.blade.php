<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar-left-side');
        sidebar.classList.toggle('show');
    }


    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll(".toggle-description");

        toggleButtons.forEach(button => {
            button.addEventListener("click", function() {
                const descriptionContainer = this.closest(".description");
                const truncatedDescription = descriptionContainer.querySelector(
                    ".truncated-description");
                const fullDescription = descriptionContainer.querySelector(".full-description");

                if (truncatedDescription.style.display === "none") {
                    truncatedDescription.style.display = "inline";
                    fullDescription.style.display = "none";
                    this.textContent = "Show More";
                } else {
                    truncatedDescription.style.display = "none";
                    fullDescription.style.display = "inline";
                    this.textContent = "Show Less";
                }
            });
        });
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>
