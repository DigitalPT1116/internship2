<template>
<div class="team" >
    <h1 class="subheading grey--text--center"> Team </h1>
        <v-container  class="my-5">
        <v-layout row wrap>
        <v-flex xs12 sm6 md4 lg4 v-for="person in team" :key="person.name">
        <v-card elevation="2"  outlined flat class="text-xs-center ma-6" size="200">
        <v-responsive class="pt-3">
        <div class="text-center"> <!--  Esta class deixa o avatar/texto no centro-->
        <v-avatar size="100" class="grey lighten-2">
        <img :src="person.avatar">
        </v-avatar>
        </div>
        </v-responsive>
        <div class="text-center">
        <v-card-text >
            <div class="subheading">{{ person.name }}</div>
            <div class="grey--text">{{ person.role }}</div>
        </v-card-text>
        </div>
        <v-card-actions class="justify-center"> <!--  Esta class deixa o texto e icons no centro-->
        <v-btn flat color="grey" > 
        <v-icon small left color="red">mdi-message</v-icon>
        <span> Message </span>
        </v-btn>
        </v-card-actions>
        </v-card>
         </v-flex>
        </v-layout>

        </v-container>
</div>
</template>

<script>
export default {
    data() {
        return{
            team: [
                {name: 'Rodrigo Rocha', role: 'Web developer', avatar: '/avatar1.png'},
                {name: 'João Vieira', role: 'Web developer', avatar: '/avatar1.png'},
                {name: 'The net Ninja', role: 'Web developer', avatar: '/avatar1.png'}
            ]
        }
    }
}
</script>