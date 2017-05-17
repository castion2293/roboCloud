<template>
    <v-app id="example-3" class="elevation-1" top-toolbar left-sidebar>
        <!--<v-toolbar>-->
            <!--<v-toolbar-side-icon @click.native.stop="sidebar4 = !sidebar4" />-->
            <!--<v-toolbar-logo class="text-xs-right">Logo2</v-toolbar-logo>-->
        <!--</v-toolbar>-->
        <v-toolbar class="green">
            <v-toolbar-side-icon @click.native.stop="sidebar4 = !sidebar4"></v-toolbar-side-icon>
            <v-toolbar-title class="hidden-sm-and-down">Toolbar</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon dark>
                <v-icon>account_circle</v-icon>
            </v-btn>
            <v-btn icon dark>
                <v-icon>favorite</v-icon>
            </v-btn>
            <v-btn icon dark>
                <v-icon>more_vert</v-icon>
            </v-btn>
        </v-toolbar>
        <main>
            <v-sidebar drawer right v-model="sidebar4" height="100%" >
                <v-list dense>
                    <template v-for="(item,i) in itemGroup">
                        <v-list-group v-if="item.items">
                            <v-list-item slot="item">
                                <v-list-tile ripple>
                                    <v-list-tile-title v-text="item.title" />
                                    <v-list-tile-action>
                                        <v-icon>keyboard_arrow_down</v-icon>
                                    </v-list-tile-action>
                                </v-list-tile>
                            </v-list-item>
                            <v-list-item v-for="(subItem,i) in item.items" :key="i">
                                <v-list-tile ripple>
                                    <v-list-tile-title v-text="subItem.title" />
                                </v-list-tile>
                            </v-list-item>
                        </v-list-group>
                        <v-subheader v-else-if="item.header" v-text="item.header" />
                        <v-divider v-else-if="item.divider" light />
                        <v-list-item v-else>
                            <v-list-tile ripple>
                                <v-list-tile-title v-text="item.title" />
                            </v-list-tile>
                        </v-list-item>
                    </template>
                </v-list>
            </v-sidebar>
            <v-content>
                <v-container fluid>
                    <div>
                        <v-alert success :value="true">
                            This is a success alert.
                        </v-alert>

                        <v-alert info :value="true">
                            This is a info alert.
                        </v-alert>

                        <v-alert warning :value="true">
                            This is a warning alert.
                        </v-alert>

                        <v-alert error :value="true">
                            This is a error alert.
                        </v-alert>
                    </div>

                    <v-card height="200px">
                        <v-bottom-nav
                            absolute
                            shift
                            value="true"
                            :class="{
                              'blue-grey': e2 === 1,
                              'teal': e2 === 2,
                              'brown': e2 === 3,
                              'brown lighten-1': e2 === 4
                            }"
                        >
                            <v-btn flat dark @click.native="e2 = 1" :value="e2 === 1">
                                <span>Video</span>
                                <v-icon>ondemand_video</v-icon>
                            </v-btn>
                            <v-btn flat dark @click.native="e2 = 2" :value="e2 === 2">
                                <span>Music</span>
                                <v-icon>music_note</v-icon>
                            </v-btn>
                            <v-btn flat dark @click.native="e2 = 3" :value="e2 === 3">
                                <span>Book</span>
                                <v-icon>book</v-icon>
                            </v-btn>
                            <v-btn flat dark @click.native="e2 = 4" :value="e2 === 4">
                                <span>Image</span>
                                <v-icon>image</v-icon>
                            </v-btn>
                        </v-bottom-nav>
                    </v-card>

                    <v-card>
                        <v-card-row class="green darken-1">
                            <v-card-title>
                                <span class="white--text">Marriot Rewards</span>
                                <v-spacer></v-spacer>
                                <div>
                                    <v-menu id="marriot" origin="top right">
                                        <v-btn icon="icon" slot="activator" class="white--text">
                                            <v-icon>more_vert</v-icon>
                                        </v-btn>
                                        <v-list>
                                            <v-list-item>
                                                <v-list-tile>
                                                    <v-list-tile-title>Never show rewards</v-list-tile-title>
                                                </v-list-tile>
                                            </v-list-item>
                                            <v-list-item>
                                                <v-list-tile>
                                                    <v-list-tile-title>Remove Card</v-list-tile-title>
                                                </v-list-tile>
                                            </v-list-item>
                                            <v-list-item>
                                                <v-list-tile>
                                                    <v-list-tile-title>Send Feedback</v-list-tile-title>
                                                </v-list-tile>
                                            </v-list-item>
                                        </v-list>
                                    </v-menu>
                                </div>
                            </v-card-title>
                        </v-card-row>
                        <v-card-text>
                            <v-card-row height="75px">
                                <v-icon class="mr-5">card_membership</v-icon>
                                <div>
                                    <div>Membership Number</div><strong>113241423</strong>
                                </div>
                            </v-card-row>
                        </v-card-text>
                        <v-card-row actions>
                            <v-btn flat class="green--text darken-1">View Email</v-btn>
                        </v-card-row>
                    </v-card>

                    <div>
                        <div class="text-xs-center">
                            <v-btn
                                v-on:click.native="chip1 = true, chip2 = true, chip3 = true, chip4= true"
                                v-if="!chip1 && !chip2 && !chip3 && !chip4"
                                class="primary white--text"
                            >
                                Reset Chips
                            </v-btn>
                        </div>
                        <v-chip close v-model="chip1">Closable</v-chip>

                        <v-chip close v-model="chip2" class="red white--text">Remove</v-chip>

                        <v-chip close v-model="chip3" outline class="green green--text">Success</v-chip>

                        <v-chip close v-model="chip4" outline label class="orange orange--text">Complete</v-chip>
                    </div>

                    <v-container fluid>
                        <v-row>
                            <v-col xs12 md6>
                                <v-subheader>Light</v-subheader>
                                <v-card class="grey lighten-4 elevation-0">
                                    <v-card-text>
                                        <v-switch v-bind:label="`Switch 1: ${ex11.toString()}`" primary v-model="ex11" light />
                                        <v-switch v-bind:label="`Switch 2: ${ex12.toString()}`" primary v-model="ex12" light />
                                    </v-card-text>
                                </v-card>
                            </v-col>
                            <v-col xs12 md6>
                                <v-subheader>Dark</v-subheader>
                                <v-card class="secondary elevation-0">
                                    <v-card-text>
                                        <v-switch v-bind:label="`Switch 3: ${ex13.toString()}`" primary v-model="ex13" dark />
                                        <v-switch v-bind:label="`Switch 4: ${ex14.toString()}`" primary v-model="ex14" dark />
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>

                    <v-container fluid>
                        <v-row row>
                            <v-col xs4>
                                <v-text-field
                                    name="input-1"
                                    label="Label Text"
                                    hint="example of persistent helper text"
                                    persistent-hint
                                    required>
                                </v-text-field>
                            </v-col>
                        </v-row>
                    </v-container>

                    <div>
                        <v-icon large v-badge:6.left class="grey--text text--lighten-1">shopping_cart</v-icon>
                        <v-icon large v-badge="{ value: '!' }" class="grey--text red--after">mail</v-icon>
                        <v-icon
                            large
                            v-badge:done.overlap.icon.left
                            class="grey--text text--lighten-1"
                        >
                            account_circle
                        </v-icon>

                        <v-icon
                            large
                            v-badge:notifications.icon.overlap
                            class="grey--text text--darken-1 orange--after"
                        >
                            account_box
                        </v-icon>
                    </div>

                </v-container>
            </v-content>
        </main>
    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                itemGroup: [
                    { header: 'Header' },
                    {
                        title: 'Parent',
                        group: '/company',
                        items: [
                            { title: 'Child' },
                            { title: 'Child' },
                            { title: 'Child' }
                        ]
                    },
                    { title: 'Link' },
                    { title: 'Link' },
                    { divider: true },
                    { header: 'Another Header' },
                    { title: 'Link' }
                ],
                sidebar4: '',
                e2: '',
                chip1: true,
                chip2: true,
                chip3: true,
                chip4: true,
                ex11: true,
                ex12: false,
                ex13: true,
                ex14: false,
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

