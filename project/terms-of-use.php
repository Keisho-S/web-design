<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Keisho G8" />
    <meta name="description" content="Project" />
    <title>Terms of Use</title>
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon" />
    <!-- https://flyclipart.com/camera-classic-old-vintage-icon-old-camera-png-95019 -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body class="term">
    <!-- Page-level header -->
    <header>
      <?php
	include ('includes/global-nav.php');
?>
    </header>
    <!-- Page-level main content -->
    <main>
      <h1>Old Product Before The Internet</h1>
      <h2>Rolleiflex</h2>
      <section>
        <h3>Terms Of Use</h3>
        <p>
          You agree to use our Services for lawful purposes only and in a way
          that does not infringe the rights of or restrict or inhibit any
          person's use and enjoyment of our Services and in compliance at all
          times with these Terms and with all laws and regulations that apply.
          In accessing our Services, you agree that you will only access its
          contents for your own personal and non-commercial use and not for any
          commercial or other purposes, including advertising or selling any
          goods or services. You also agree not to adapt, alter or create a
          derivative work from any content on our Services except for your own
          personal, non-commercial use. You will need our prior written
          permission if you want to use any content on our Services for any
          other reason.
        </p>

        <h4>Arbitration</h4>
        <p>
          All claims and disputes arising under or relating to this Agreement
          are to be settled by binding arbitration in the state of [insert state
          in which parties agree to arbitrate or another location mutually
          agreeable to the parties. An award of arbitration may be confirmed in
          a court of competent jurisdiction.
        </p>

        <h4 id="limitation-liability">Limitation of Liability</h4>
        <p>
          Unless otherwise specifically enumerated in the Contract or in the
          purchase order, neither the Department nor the Customer shall be
          liable for special, indirect, punitive, or consequential damages,
          including lost data or records (unless the Contract or purchase order
          requires the Contractor to back-up data or records), even if the
          Department or Customer has been advised that such damages are
          possible. Neither the Department nor the Customer shall be liable for
          lost profits, lost revenue, or lost institutional operating savings.
          The Department or Customer may, in addition to other remedies
          available to them at law or equity and upon notice to the Contractor,
          retain such monies from amounts due Contractor as may be necessary to
          satisfy any claim for damages, penalties, costs, and the like asserted
          by or against them. The State may set off any liability or other
          obligation of the Contractor or its affiliates to the State against
          any payments due the Contractor under any contract with the State.
        </p>
      </section>
      <!-- Side Notes / Related Information -->
      <aside>
        <!-- Newsletter Subscribe Form -->
        <h3 class="new-feature">Subscribe to Newsletter</h3>
        <form action="subscribe.php" method="get">
          <label for="emailAddress">Email</label>
          <input type="email" name="emailAddress" id="emailAddress" required />
          <button type="submit">Subscribe</button>
        </form>
      </aside>
    </main>
    <!-- Page-level footer -->
    <footer>
      <?php
	include ('includes/footer-nav.php');
?>
      <p><small>©G8KS. All rights reserved</small></p>
    </footer>
  </body>
</html>
