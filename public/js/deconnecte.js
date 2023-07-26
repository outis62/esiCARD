
<script>

    window.addEventListener('popstate', function(event) { 
        const isLoggedOut = document.cookie.indexOf('isLoggedOut') !== -1;

        if (isLoggedOut) {
            history.pushState(null, document.title, window.location.href);
        }
    });
    
</script>
