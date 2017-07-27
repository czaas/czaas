<?php include('header.php') ?>
    <article>
      <h2>Sight Words</h2>

      <p>I was inspired to build this while my son was learning to read. My wife and I would practice his sight words using flashcards, when he would struggle with a word we would place that word aside in a pile and continue with the next word and so on. With flash cards we were limited to the amount of words we wanted to write on flash cards. </p>

      <p>This application initially reaches out to a json file and saves it to localStorage. You are then prompted to create an account to start learning your sight words, your account is saved locally using the localStorage API. Once you create an account you can then select a list to start from. Main list, practice list, or view words by groups of 100. When you're viewing a word, you can mark it complete, add to practice list, or just toggle through the words using previous and next buttons.</p>

      <p>If your web browser supports the speech synthesis API, a sound icon will appear and if clicked will read back the word on screen. </p>
    
      <p>Check out the <a href="http://sightwords.czaas.com/" target="_blank">app</a>. </p>
    </article>

    <article>
      <h3>All Lists</h3>
      <img class="lg-vp" src="img/sightwords/sightwords-list.jpg">

      <h3>Sing Word View</h3>
      <img class="lg-vp" src="img/sightwords/sightwords-single.jpg">

      <h3>Group of Words View</h3>
      <img class="lg-vp" src="img/sightwords/sightwords-group.jpg">

      <h3>Manage Account</h3>
      <img class="lg-vp" src="img/sightwords/sightwords-manage-account.jpg">
    </article>

<?php include('footer.php'); ?>