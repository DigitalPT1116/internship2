<template>
  <v-app id="inspire">
  
    <v-app-bar  flat app color="black">
 <v-btn light color="transparent" href="videos" >
<span style="color:#ED563B" >
<v-toolbar-title >Digital </v-toolbar-title>
</span>

<span style="color:white" >
<v-toolbar-title> PT</v-toolbar-title>
</span>



<!--<v-app-bar-nav-icon color="white"></v-app-bar-nav-icon>  Isto é o menu para as opções -->

    <v-avatar>
      <img src="./images/gym.svg" alt="John" >
    </v-avatar>
 </v-btn>
      <v-tabs centered class="ml-n9" color="red" >
        <v-tab v-for="link in links" :key="link" @click="changeRoute(link)">
        
        <span style="color:white" >
        {{ link }}
        </span> 

        </v-tab> 
      </v-tabs>
      
      <v-btn centered color="red" dark href="login" > Login/Sign Up </v-btn>


      <v-btn icon centered color="red" >
        <v-icon center dark @click="changeRoute()"> mdi-account-circle </v-icon>     
      </v-btn>
      <v-btn icon centered color="red">
        <v-icon center dark @click="changeRoute()">mdi-magnify</v-icon>
      </v-btn>

    </v-app-bar>
    

  <!--
  <div id="app">
    <nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </nav>
  </div> -->
  
   <v-main class="./images/gym.svg"     > <!-- Ambiente de fundo -->
   
   <router-view/>

   </v-main>
   </v-app>

   
   
</template>

<script>



  export default {

    data: () => ({
      links: [
        'videos',
        'sobre',
        'button',
        'inicio',
        'team',
       
      ],
    }),
    
    methods: {
      changeRoute(route) {
        this.$router.push({name:route});
      }
    }
  }

</script>



<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #ffffff;
  background-color: lightblue;
}


div[data-app='true'] { //Isto é o ambiente de fundo
  height: 820px;  
  background: url('./images/back2.jpg') no-repeat center center fixed !important;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  
}

h1 {
    text-align: center;
    color: #ffffff;
    font-size: 2.5em;
    font-weight: 700;
  }


nav {
  padding: 20px;

  a {
    font-weight: bold;
    color: #ffffff;


    &.router-link-exact-active {
      color: #ffffff;
    }
  }
}

  h2 {
    text-align: center;
    color: #ffffff;
    font-size: 2em;
    font-weight: 700;
  }
</style>
