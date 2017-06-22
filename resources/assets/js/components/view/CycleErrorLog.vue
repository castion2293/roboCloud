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
                        name: 'Resistor Overhead',
                        code: '8-031',
                        description: 'The temperature of the regenerative resistor exceeds 130\u2103',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Servo Power Over Volt',
                        code: '8-032',
                        description: 'The controller internal servo power supply has reached 420 V or more',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Distribution error',
                        code: '8-033',
                        description: 'A distribution process calculation error was detected',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Unable to Trans',
                        code: '8-034',
                        description: 'A distribution target position coordinate conversion failure error was detected',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Point Invalid of Range',
                        code: '8-035',
                        description: 'A distribution target position operation out-of-range error was detected',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis1 Exceed Speed',
                        code: '8-041',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis2 Exceed Speed',
                        code: '8-042',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis3 Exceed Speed',
                        code: '8-043',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis4 Exceed Speed',
                        code: '8-044',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis5 Exceed Speed',
                        code: '8-045',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                    {
                        name: 'Axis6 Exceed Speed',
                        code: '8-046',
                        description: 'The results of the internal calculation process of the operation command generates a command value that exceeds the limit speed of the corresopnding joint axis',
                        datetime: '2017-06-22/13:34:35'
                    },
                ]
            }
        }
    }
</script>
