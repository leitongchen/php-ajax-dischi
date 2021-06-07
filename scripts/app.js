const app = new Vue({
    el: "#app",
    data: {
        userInput: "",
        albumsList: [],

        genreList: ["Rock", "Pop", "Soul", "Punk"],
    },

    methods: {
        getAxios() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
                .then((resp) => {

                    this.getAlbums(resp.data.data); 

                })
                .catch((er) => {

                    console.log(er);
                }) 
        },
        getAlbums(arrayOfAlbums) {

            albums = [];
            arrayOfAlbums.forEach((album) => {
                //console.log(album);

                albums.push(album);
            })

            this.albumsList = [
                ...albums
            ]

            // console.log(this.albumsList)
        }



    },
    mounted: function() {
        this.getAxios();
    }
})