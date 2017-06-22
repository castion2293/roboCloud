<template>
    <v-card>
        <v-data-table
            :headers="headers"
            :items="items"
            hide-action
            class="elevation-1 grey lighten-3"
        >
            <template slot="items" scope="props">
                <td>{{ props.item.name }}</td>
                <td class="text-xs-left">{{ props.item.code }}</td>
                <td class="text-xs-left">{{ props.item.description }}</td>
                <td class="text-xs-left">{{ props.item.datetime }}</td>
            </template>
        </v-data-table>
    </v-card>
</template>

<script>
    export default {
        data () {
            return {
                headers: [
                    {
                        text: '異常名稱',
                        left: true,
                        value: 'name'
                    },
                    {
                        text: '異常代碼',
                        left:true,
                        value: 'code'
                    },
                    {
                        text: '異常敘述',
                        left: true,
                        value: 'description'
                    },
                    {
                        text: '日期/時間',
                        left: true,
                        value: 'datetime'
                    },
                ],
                items: [
                    {
                        name: 'Filedbus Parameter error',
                        code: '8-353',
                        description: 'An error occurred in the Filedbus parameter and an emergency stop was applied',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Filedbus Offline',
                        code: '8-354',
                        description: 'An error occurred in the Filedbus parameter and an emergency stop was applied',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Filedbus Board error',
                        code: '8-355',
                        description: 'The Fieldbus printed board type is incorrect',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis1 communication error',
                        code: '8-561',
                        description: 'An encoderbroken wire error was detected in Axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'PLC user alarm',
                        code: '4-077',
                        description: 'A level 4 user alarm has occurred in the internal PLC',
                        datetime: '2017-06-22/13:34:35'
                    },
                ]
            }
        }
    }
</script>
