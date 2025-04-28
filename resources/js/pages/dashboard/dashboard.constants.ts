import type { TableColumn } from '@/types/tables';

import type { Restaurant } from './dashboard.types';

export const TABLE_COLUMNS: Array<TableColumn<keyof Restaurant>> = [
    {
        name: 'ID',
        dataKey: 'id',
        width: 50,
    },
    {
        name: 'Name',
        dataKey: 'name',
    },
    {
        name: 'Schedules',
        dataKey: 'schedules',
        dataType: 'element',
    },
    {
        name: 'Created At',
        dataKey: 'created_at',
    },
    {
        name: 'Updated At',
        dataKey: 'updated_at',
    },
]
