<!-- start find jobs -->
<section class="section" page="inc_start_find_jobs" id="findJob">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span class="text-primary">Career</span> You Deserve it</h1>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0">澳元兑比</h5>
                    </div>
                    <div class="card-body" id="vue_australian_dollar">
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="card-title mb-0">人民币兑比</h5>
                    </div>
                    <div class="card-body" id="vue_rmb_dollar">

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end find jobs -->
 <script>
   Vue.createApp({
    data() {
        return {
            data_list: [
                {
                    name:'1',
                    name_en:'a',
                    featured_image:"aus",
                    exchange_rate:452
                },
                {
                    name:'2',
                    name_en:'b',
                    featured_image:"aus",
                    exchange_rate:333
                },
            ]
        };
    },
    template: `
<!--html-->
                        <div class="d-flex mb-3" v-for="item in data_list">
                            <div class="flex-shrink-0">
                                <div class="avatar-group">
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Frank" data-bs-original-title="Frank">
                                        <svg class="svg-sprite rounded-circle avatar-xxs" >
                                        <use href="#aus" width="30" height="30"></use>
                                    </svg>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Anna" data-bs-original-title="Anna">
                                        <svg class="svg-sprite rounded-circle avatar-xxs" >
                                        <use :href="'#' + item.featured_image" width="30" height="30"></use>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">{{item.name}} ({{item.name_en}})</h6>
                            </div>
                            <div>
                                <h6 class="text-success mb-0">{{item.exchange_rate}}</h6>
                            </div>
                        </div>
                    
<!--!html-->
`,
    async created() {
        try {
        // let res = await axios.get('https://erp.newstarsec.com/api/currency_select.php');
        // this.data_list = res.data.data;

        // const targetIdsSet = new Set([1, 2, 56, 30, 11, 32]);
        // this.data_list = this.data_list.filter(item => {
        //     const id = Number(item.id);
        //     return targetIdsSet.has(id);
        // });
    } catch (error) {
        console.error('Error fetching data:', error);
    }
    }
}).mount('#vue_australian_dollar');

Vue.createApp({
    data() {
        return {
            data_list_cny: [
                {
                    name:'1',
                    name_en:'a',
                    featured_image:"aus",
                    exchange_rate:452
                },
                {
                    name:'2',
                    name_en:'b',
                    featured_image:"aus",
                    exchange_rate:333
                },
            ]
        };
    },
    template: `
<!--html-->
                        <div class="d-flex mb-3" v-for="item in data_list_cny">
                            <div class="flex-shrink-0">
                                <div class="avatar-group">
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Frank" data-bs-original-title="Frank">
                                        <svg class="svg-sprite rounded-circle avatar-xxs" >
                                        <use href="#chn" width="30" height="30"></use>
                                    </svg>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Anna" data-bs-original-title="Anna">
                                        <svg class="svg-sprite rounded-circle avatar-xxs" >
                                        <use :href="'#' + item.featured_image" width="30" height="30"></use>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">{{item.name}} ({{item.name_en}})</h6>
                            </div>
                            <div>
                                <h6 class="text-success mb-0">{{item.exchange_rate}}</h6>
                            </div>
                        </div>
                    
<!--!html-->
`,
    async created() {
        try {
        // let res = await axios.get('https://erp.newstarsec.com/api/currency_select_cny.php');

        // this.data_list_cny = res.data.data;

        // 使用 Set 进行查找优化
        // const targetIdsSet_cny = new Set([6, 2, 10, 56, 11, 32, 7]);

        // // 过滤出符合条件的对象
        // this.data_list_cny = this.data_list_cny.filter(item => {
        //     const id_cny = Number(item.id); // 确保 ID 为数字类型
        //     return targetIdsSet_cny.has(id_cny);
        // });
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }
}).mount('#vue_rmb_dollar');
 </script>