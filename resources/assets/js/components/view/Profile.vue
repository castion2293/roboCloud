<template>
    <div>
        <v-card class="grey lighten-3 container">
            <h6 class="w3-bottombar"><b>基本資料</b></h6>
            <v-layout row wrap>
                <v-flex md3>
                    <img :src="user.user_profile_img">
                </v-flex>
                <v-flex md3>
                    <div>
                        <div>姓名</div><strong>{{ user.name }}</strong>
                    </div>
                    <div class="mt-4">
                        <div>電子信箱</div><strong>{{ user.email }}</strong>
                    </div>
                    <div class="mt-4">
                        <div>電話</div><strong>{{ user.phone_number }}</strong>
                    </div>
                </v-flex>
                <v-flex md1>
                    <v-dialog v-model="dialog">
                        <v-icon style="cursor:pointer;" slot="activator">create</v-icon>
                        <v-card>
                            <v-card-row>
                                <v-card-title>基本資料設定</v-card-title>
                            </v-card-row>
                            <v-card-row>
                                <v-card-text>
                                    <v-text-field label="姓名" required v-model="set.name"></v-text-field>
                                    <v-text-field label="電子郵件" type="email" required v-model="set.email"></v-text-field>
                                    <v-text-field label="電話" hint="範例:0988265895"
                                                  persistent-hint
                                                  required v-model="set.phone_number"
                                    ></v-text-field>
                                </v-card-text>
                            </v-card-row>
                            <v-card-row class="pl-5 pr-5">
                                <div>
                                    <img ref="Image" :src="user.user_profile_img" style="width:100%">
                                </div>
                            </v-card-row>
                            <v-card-row class="mt-2">
                                <input type="file" ref="myFile" name="user_profile_img" @change="readURL($refs.myFile);" style="display:none;">
                                <v-btn dark default class="btn--dark-flat-pressed z-depth-2" @click.native="$refs.myFile.click()">上傳照片</v-btn>
                            </v-card-row>
                            <v-card-row actions>
                                <v-btn class="blue--text darken-1" flat @click.native="dialog = false">關閉</v-btn>
                                <v-btn class="blue--text darken-1" flat @click.native="postData">儲存</v-btn>
                            </v-card-row>
                        </v-card>
                    </v-dialog>
                </v-flex>
            </v-layout>
        </v-card>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                user: [],
                dialog: false,
                set: {
                    name: '',
                    email: '',
                    phone_number: '',
                    image: '',
                }
            }
        },

        mounted () {
            this.fetchData();
        },

        methods: {
            fetchData () {
                axios.get('home/getCurrentUser')
                    .then(response => {
                        this.user = response.data
                        this.set = this.user;
                    });
            },
            postData () {
                this.dialog = false;

                axios.put(`user/${this.user.id}`, this.set)
                    .then(response => {
                        this.user = response.data.user;
                        this.set = this.user;
                    }).catch(error => {
                        console.log(error);
                    });
            },
            readURL (input) {

                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    let vm = this;

                    reader.onload = (e) => {
                        vm.$refs.Image.src = e.target.result;
                        vm.set.image = e.target.result;
                    };


                    reader.readAsDataURL(input.files[0]);
                }
            }
        }

    }
</script>
