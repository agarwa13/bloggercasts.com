<kiosk-affiliates inline-template>
    <div>
        
        <!-- Search Field Panel -->
        <div class="panel panel-default panel-flush" style="border: 0;">
            <div class="panel-body">
                <form class="form-horizontal p-b-none" role="form" @submit.prevent>
                    <!-- Search Field -->
                    <div class="form-group m-b-none">
                        <div class="col-md-12">
                            <input type="text" id="kiosk-affiliates-search" class="form-control"
                                    name="search"
                                    placeholder="Search By Name"
                                    v-model="searchForm.query"
                                    @keyup.enter="search">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Searching -->
        <div class="panel panel-default" v-if="searching">
            <div class="panel-heading">Search Results</div>

            <div class="panel-body">
                <i class="fa fa-btn fa-spinner fa-spin"></i>Searching
            </div>
        </div>

        <!-- No Search Results -->
        <div class="panel panel-warning" v-if=" ! searching && noSearchResults">
            <div class="panel-heading">Search Results</div>

            <div class="panel-body">
                No affiliates matched the given criteria.
            </div>
        </div>

        <!-- Affiliate Search Results -->
        <div class="panel panel-default" v-if=" ! searching && searchResults.length > 0">
            <div class="panel-heading">Search Results</div>

            <div class="panel-body">
                <table class="table table-borderless m-b-none">
                    <thead>
                        <th>Name</th>
                        <th></th>
                    </thead>

                    <tbody>
                        <tr v-for="searchAffiliate in searchResults">
                            
                            <!-- Name -->
                            <td>
                                <div class="btn-table-align">
                                    @{{ searchAffiliate.name }}
                                </div>
                            </td>

                            <td>
                                <!-- View Affiliate Profile -->
                                <button class="btn btn-default" @click="showAffiliateProfile(searchAffiliate)">
                                    <i class="fa fa-search"></i>
                                </button>
                                <button class="btn btn-default" @click="copyAffiliateLink(searchAffiliate)">
                                    <i class="fa fa-copy"></i>
                                </button>
                                <a class="btn btn-default" :href='searchAffiliate.portal'>
                                    <i class="fa fa-external-link"></i>
                                </a>



                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    

        <!-- Affiliate Profile Detail -->
        <div v-show="showingAffiliateProfile">
            @include('kiosk.affiliate-profile')
        </div>

    </div>
</kiosk-affiliates> 
