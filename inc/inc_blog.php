  <!-- start blog -->
  <section class="section" page="inc_blog" id="blog">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="text-center mb-5">
                      <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our Latest <span class="text-primary">News</span></h1>
                      <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row">
              <?php
                $blog_list = [
                    [
                        'img' => 'assets/images/small/img-8.jpg',
                        'title' => 'Design your apps in your own way ?',
                        'date' => '30 Oct, 2021',
                        'comment' => '364 Comment',
                        'text' => 'One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.',
                        'href' => "blog_detail.php"
                    ],
                    [
                        'img' => 'assets/images/small/img-6.jpg',
                        'title' => 'Design your apps in your own way ?',
                        'date' => '30 Oct, 2021',
                        'comment' => '364 Comment',
                        'text' => 'One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.',
                        'href' => "blog_detail.php"
                    ],
                    [
                        'img' => 'assets/images/small/img-9.jpg',
                        'title' => 'Design your apps in your own way ?',
                        'date' => '30 Oct, 2021',
                        'comment' => '364 Comment',
                        'text' => 'One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.',
                        'href' => "blog_detail.php"
                    ],

                ];
                foreach ($blog_list as $item) {
                    $item_href = $item['href'];
                ?>
                  <div class="col-lg-4 col-md-6">
                      <div class="card border_top">
                          <div class="card-body">
                              <img src="<?= $item['img'] ?>" alt="" class="img-fluid rounded" />
                          </div>
                          <div class="card-body">
                              <ul class="list-inline fs-14 text-muted">
                                  <li class="list-inline-item">
                                      <i class="ri-calendar-line align-bottom me-1"></i> <?= $item['date'] ?>
                                  </li>
                                  <li class="list-inline-item">
                                      <i class="ri-message-2-line align-bottom me-1"></i> <?= $item['comment'] ?>
                                  </li>
                              </ul>
                              <a href="<?= $item_href ?>">
                                  <h5><?= $item['title'] ?></h5>
                              </a>
                              <p class="text-muted fs-14"><?= $item['text'] ?></p>

                              <div>
                                  <a href="<?= $item_href ?>" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php } ?>


          </div>
      </div>
      <!-- end container -->
  </section>
  <!-- end blog -->