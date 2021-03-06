<?php Response::setMetaDescription('Join Us') ?>
<?php Response::addMetaImage('https://spee.ch/@lbryteam/everyone.jpg') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>
<main>
  <section class="post-content">

    <div class="content">
      <h1>Join Team Content Freedom</h1>

      <p>
        Changing the landscape of content distribution is no easy task. LBRY is growing rapidly, and we're always looking for great people
        to join us. If you're looking for a challenging and rewarding pursuit, if you want to work with a team that shares your passion and
        curiosity, you've come to the right place.
      </p>

      <img src="https://spee.ch/@lbryteam:6/everyone.jpg" alt="LBRY Team Photo from November 2017" />
      <div class="meta text-center spacer1">
        Fortunately, photo shoots are not a regular job activity.
      </div>

      <h2>About LBRY</h2>

      <p>
        Some things to know about working at LBRY:
      </p>

      <ul>
        <li>
          We understand the importance of <a href="http://blog.deliveringhappiness.com/the-motivation-trifecta-autonomy-mastery-and-purpose">autonomy, mastery, and purpose</a>.
        </li>
        <li>
          We judge you entirely by what you produce. We don’t care how long you work, where you work, how you work or what credentials you
          have. We care about what you get done.
        </li>
        <li>
          We are extremely transparent, organizationally flat, and open-minded. While you will have clearly delineated responsibilities, you are welcome and
          encouraged to contribute beyond those areas. We judge ideas and results, not ranks and titles.
        </li>
        <li>
          We believe great results can only come from great people. If you’re interested in
          working <a href="/team">alongside people</a> who are bright, creative, and diligent, this is the place.
        </li>
      </ul>

      <h2>Who We're Looking For</h2>

      <p>
        There's no one kind of LBRYian. We value people who can bring new perspectives to our team. Here are some traits that are important to us:
      </p>

      <ul>
        <li>
          Ability to solve complex problems in simple ways. LBRY has many moving parts, but we try our hardest to power it with simple code.
          Your job is not just to solve problems, but to solve problems in a way that will last and can easily be picked up by other people.
        </li>
        <li>
          Knack for user-experience and user-perspective. Even if you're designing the guts of our DHT, what you create ultimately has to work for real people. Our user base ranges from casual
          web surfers to crypto-nerd power users and you'll need an ability to understand how to create solutions that work for both.
        </li>
        <li>
          Reliable and independent. We expect a lot out of you, but we won't keep tabs on you. You must thrive in that kind of environment.
        </li>
        <li>
          No degree, credential, or age requirements. If you can do the work, we don't care how you got the skills.
        </li>
        <li>
          Someone who appreciates that our CTO would <a href="https://gist.github.com/lyoshenka/0a43205aa9a072b196ff87e2c689a8b9">create this document</a> and then link it in a job posting.
        </li>
      </ul>


      <h2>Positions</h2>

      <h4>Protocol Developers</h4>
      <p>
        We're seeking multiple developers to work on the core LBRY protocol. This includes the LBRY <a href="https://github.com/lbryio/lbrycrd">blockchain</a> (C++),
        <a href="https://github.com/lbryio/lbryum">wallet</a> (Python), and <a href="https://github.com/lbryio/lbry">daemon</a> (Python, but maybe you're the one to finally rewrite it in Go).
      </p>
      <p>Competence with distributed systems, cryptography, and networks is mandatory. Experience with blockchain is beneficial but not required.</p>

      <h4>Web Developer</h4>
      <p>
        We're seeking someone to manage <a href="https://github.com/lbryio/lbry.io">this very website</a>, as well as other LBRY web properties and projects.
      </p>
      <p>
        This position involves both design and programming elements and is good for someone with a mix of creativity and logic.
        The LBRY website is currently written in PHP, but you're welcome to change this :)
      </p>

      <h2>Applying</h2>
      <p>
        Contact <a href="mailto:joinus@lbry.io">joinus@lbry.io</a> if interested in a position. Please include the following:
      </p>
      <ol>
        <li>A resume, LinkedIn profile, or other resource that would serve as a work history.</li>
        <li>A code sample. Preferrably a link to a public repository for a project you have built or significantly contributed to.</li>
        <li>One sentence about why you'd like to work for LBRY.</li>
      </ol>

      <h2>Other Work</h2>

      <p>
        Interested in contributing but not ready for commitment? We have several <a href="/bounty">smaller projects</a> available for anyone
        who wants to do them. We also have a <a href="/faq/contributing">guide for contributors</a> to help you find other ways to get
        involved. If none of that suits your fancy, join our <a href="https://chat.lbry.io">Discord chat</a> and we'll help you find something
        you'll love.
      </p>

    </div>
  </section>
</main>
<?php echo View::render('nav/_footer') ?>
