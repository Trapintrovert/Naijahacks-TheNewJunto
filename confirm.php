<?php include 'base.php' ?>
<?php startblock('mainNav') ?>	
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="">
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
	<?php endblock() ?>

    <?php startblock('home') ?>
        <div class="signup-page">
            <div class="signup-main">  	
                    <div class="signup-block">
                        <form>
                            <div class="form-group">
                                <label for="telephone">Telephone:</label>
                                <input type="tel" name="telephone" placeholder="Enter Telephone" required="">
                            </div>
                            <input type="submit" name="Sign In" value="Create My Account">	
                            				
                        </form>
                        
                    </div>
            </div>
        </div>
    <?php endblock() ?>

    <!--Horizontal line before the footer -->
	<?php startblock('footline') ?>	
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

					</div>
				</div>
			</div>
		</nav>
	<?php endblock() ?>