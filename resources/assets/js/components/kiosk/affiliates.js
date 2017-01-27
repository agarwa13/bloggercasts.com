// var base = require('kiosk/affiliates');

Vue.component('kiosk-affiliates', {

    // mixins: [base],


	data: function(){
    	return {
    		searchForm: new SparkForm({
				query: ''
    		}), 
    		
    		// Data Storage
			searchResults: [],

    		// Booleans
    		searching: false,
    		noSearchResults: false,
    		showingAffiliateProfile: false

    	}
    },

    created: function(){

    	var self = this;

        this.$on('showSearch', function(){
            self.navigateToSearch();
        });

        Bus.$on('sparkHashChanged', function (hash, parameters) {
            if (hash != 'affiliates') {
                return true;
            }

            if (parameters && parameters.length > 0) {
                self.loadProfile({ id: parameters[0] });
            } else {
                self.showSearch();
            }

            return true;
        });
    },


    methods: {

    	/**
    	* Copy Link to Clipboard for given Affiliate
    	*/
    	copyAffiliateLink() {

    		

    	},

    	/**
         * Perform a search for the given query.
         */
        search() {
            this.searching = true;
            this.noSearchResults = false;

            this.$http.post('/spark/kiosk/affiliates/search', JSON.stringify(this.searchForm))
                .then(response => {
                    this.searchResults = response.data;
                    this.noSearchResults = this.searchResults.length === 0;

                    this.searching = false;
                });
        },


        /**
         * Show the search results and update the browser history.
         */
        navigateToSearch() {
            history.pushState(null, null, '#/affiliates');

            this.showSearch();
        },


        /**
         * Show the search results.
         */
        showSearch() {
            this.showingAffiliateProfile = false;

            Vue.nextTick(function () {
                $('#kiosk-affiliates-search').focus();
            });
        },


        /**
         * Show the affiliate profile for the given affiliate.
         */
        showAffiliateProfile(affiliate) {
            history.pushState(null, null, '#/affiliates/' + affiliate.id);

            this.loadProfile(affiliate);
        },


        /**
         * Load the affiliate profile for the given affiliate.
         */
        loadProfile(affiliate) {
            this.$emit('showAffiliateProfile', affiliate.id);

            this.showingAffiliateProfile = true;
        }

    },

    

});
