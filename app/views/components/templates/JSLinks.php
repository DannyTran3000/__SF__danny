<script>
  let isOriginLoading = true

  const toggleGlobalLoader = (shouldShow = true, isOrigin = false) => {
    const body = document.querySelector('body')
    if (body) {
      body.style.overflow = shouldShow ? 'hidden' : 'unset'

      if (isOriginLoading) {
        isOriginLoading = false
        body.setAttribute('data-load', 'true')
      }
    }

    const loader = document.querySelector('#loader')
    if (!loader) return

    loader.innerHTML = shouldShow ? `<?php include(DIR_APP . '/views/components/molecules/Loader.php');?>` : ''
  }
</script>

<script src="/assets/utils/index.js"></script>
<script src="/assets/utils/header.js"></script>
<script src="/assets/utils/contactForm.js"></script>