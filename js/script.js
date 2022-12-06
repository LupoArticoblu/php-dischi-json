//script copiato dalla video lezione
const { createApp } = Vue;

createApp({

  data(){
    return{
      apiUrl: 'server.php',
      discList: []
    }
  },
  method:{
    getDiscs(){
      axios.get(this.apiUrl)
      .then(r => {
        this.discList = r.data;
        console.log(this.discList);
      })
    }
  },
  mounted(){
    this.getDiscs();
  }
}).mount('#app');