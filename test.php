
    
    <button type="button" style="height:40px;width:500px">
      Press this
    </button>
<script>
  if ('canShare' in navigator) {
  const share = async function(shareimg, shareurl, sharetitle, sharetext) {
    try {
      const response = await fetch(shareimg);
      const blob = await response.blob();
      const file = new File([blob], 'rick.pdf', {type: blob.type});

      await navigator.share({
        url: shareurl,
        title: sharetitle,
        text: sharetext,
        files: [file]
      });
    } catch (err) {
      console.log(err.name, err.message);
    }
  };
  
  document.querySelector('button').addEventListener('click', () => {
    share(
      'https://upload.wikimedia.org/wikipedia/commons/e/ef/Sample_Syllabus_for_Wikipedia_assignment.pdf',
      'https://en.wikipedia.org/wiki/Rick_Astley',
      'Rick Astley',
      'Nev you up!'
    );
  });  
}
</script>
    