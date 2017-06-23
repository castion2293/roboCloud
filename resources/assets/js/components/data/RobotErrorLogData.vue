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
                        name: 'Memory Check error',
                        code: '8-002',
                        description: 'An error was detected by the self-diagnostics of the memory',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Watchdog error',
                        code: '8-004',
                        description: 'An error was detected by the CPU regular monitor circuit of the main control printed board',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Servo soft Watchdog error',
                        code: '8-007',
                        description: 'The main control printed board detected a servo printed board CPU error in the mutual monitoring of the main control and servo printed board',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'AC Alarm',
                        code: '8-013',
                        description: 'A power supply error was detected by the AC power supply monitor circuit',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Emergency Stop SW ON',
                        code: '8-014',
                        description: 'An emergency stop pushbutton was pressed',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Parameter error',
                        code: '8-015',
                        description: 'A parameter errror was detected',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Servo Type error',
                        code: '8-016',
                        description: 'An error was found in the servo amplifier settings',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Safety SW ON',
                        code: '8-017',
                        description: 'The Satety switch was turned on',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Servo CPU error',
                        code: '8-018',
                        description: 'A CPU error was detected in the servo printed board',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'MMI timeout',
                        code: '8-024',
                        description: 'The MMI Internal process was not completed even after the specified time elapsed',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Servo Gate OFF error',
                        code: '8-026',
                        description: 'The servo turns off unexpectedly',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'DC24 Regulator error',
                        code: '8-029',
                        description: 'The controller internal 24 V DC power supply voltage has dropped to 21 V or less',
                        datetime: '2017-06-22/13:34:35'
                    },
                ]
            }
        },
    }
</script>
