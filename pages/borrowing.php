<?php include '../includes/navbar.php'; ?>

<section>
  <?php require '../includes/filter.php'; ?>
  <?php require '../includes/modals.php'; ?>
</section>
<!-- items reserved  -->
<section>
  <?php require '../includes/Cards.php'; ?>
  <div class="product-item m-2 bg-dark p-2 d-flex flex-row w-25 card">
    <div class="product-img cont image w-50 ">
      <img src="/images/product_img_8.jpg" class="image card-img img-fluid ">
      <div class="overlay">
        <div class="middle">
          <div class="text">
            <p>Author</p>
            <p>State</p>
            <p>Category</p>
            <p>Edition Date</p>
            <p>Duration</p>
          </div>
        </div>
      </div>
    </div>
    <div class="product-content text-center d-flex flex-column  text-uppercase ">
      <span class="fw-bold">Title</span>
      <p>Nick Name : Name</p>
      <p>Full Name : Name</p>
      <p>Reserved : Hour</p>
      <button class="btn btn-outline-primary m-2 text-white" data-bs-toggle="modal" data-bs-target="#return">Confirm Item return</button>
    </div>
  </div>
</section>
<?php require '../includes/modals.php'; ?>
<?php require '../includes/footer.php'; ?>
<script src="/js/Add-Item.js"></script>
</body>

</html>