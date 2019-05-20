<template>
    <div v-if="isLoaded">
        <div class="list-group list-group-flush">
            <div v-for="page in pages" :key="page.id">
                <a 
                    :href="page.link" 
                    class="list-group-item list-group-item-action sizeable-element"
                    :class="{'active':page.id == post.ID}"
                    v-html="page.title.rendered"
                ></a>
                <div v-if="page.children.length > 0" >
                <div v-for="child in page.children" :key="child.id" >
                    <a 
                        :href="child.link" 
                        class="list-group-item list-group-item-action child-page sizeable-element"
                        :class="{'active':child.id == post.ID}"
                    >
                    <i class="fa fa-angle-up"></i> {{child.title.rendered}}
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['post'],

    data() {
        return {
            pages: [],
            isLoaded: false,
        }
    },

    created() {
        this.getChildPages();
    },

    methods: {
        getChildPages() {
            axios.get("/wp-json/wp/v2/pages?parent=" + this.post.ID + "&orderby=menu_order&order=asc&exclude[]=4&exclude[]=138")
                .then(response => {
                    this.pages = response.data;

                    Object.keys(this.pages).map((key) => {
                        
                        if(!this.pages[key].children){
                            this.pages[key].children = [];
                        };
       
                    })

                    this.isLoaded = true;

                    if(this.pages.length == 0){
                        this.getSiblingPages();
                    }
                });
        },

        getSiblingPages() {
            axios.get("/wp-json/wp/v2/pages?parent=" + this.post.post_parent + "&orderby=menu_order&order=asc&per_page=30&exclude=3,24,30,32,34,36,38")
                .then(response => {
                    this.pages = response.data;

                    Object.keys(this.pages).map((key) => {
                        
                        this.pages[key].children = [];
                        // axios.get("/wp-json/wp/v2/pages?parent=" + this.pages[key].id + "&orderby=menu_order&order=asc")
                        //     .then(response => {
                        //         this.pages[key].children = response.data; 
                        //     });
                    })

                    this.isLoaded = true;
                
                });
        }
    }
}
</script>

