<div page="inc_blog_list" class="col-8 mt-5">
    <div class="tab-pane" id="news" role="tabpanel">
        <div class="row">
            <?php 
            $blog_list = [
                    [
                        'img'=>'assets/images/small/img-1.jpg',
                        'badge'=>'Business',
                        'title'=>'A mix of friends and strangers heading off to find an adventure',
                        'editor'=>'James Ballard',
                        'date'=>'23 Nov, 2021'
                    ],
                    [
                        'img'=>'assets/images/small/img-2.jpg',
                        'badge'=>'Business',
                        'title'=>'A mix of friends and strangers heading off to find an adventure',
                        'editor'=>'James Ballard',
                        'date'=>'23 Nov, 2021'
                    ],
                ];
                foreach( $blog_list as $item){
            ?>
            <div class="col-lg-12">
                <div class="card border">
                    <div class="card-body">
                        <div class="d-sm-flex">
                            <div class="flex-shrink-0">
                                <img src="<?= $item['img']?>" alt="" width="200" class="rounded-1" />
                            </div>
                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><span class="badge bg-success-subtle text-success fs-11"><?= $item['badge']?></span></li>
                                </ul>
                                <h5><a href="javascript:void(0);"><?= $item['title']?></a></h5>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> <?= $item['editor']?></li>
                                    <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> <?= $item['date']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
                    <?php }?>
         

        </div>
        <!--end row-->

        <div class="mt-4">
            <ul class="pagination pagination-separated justify-content-center mb-0">
                <li class="page-item disabled">
                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                </li>
                <li class="page-item active">
                    <a href="javascript:void(0);" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>