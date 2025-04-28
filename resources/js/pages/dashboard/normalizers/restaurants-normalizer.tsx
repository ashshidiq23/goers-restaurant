import { format } from 'date-fns';

import type { Restaurants } from '../dashboard.types';

const restaurantsNormalizer = (data: Restaurants) => data.map((el) => ({
    id: el.id || 0,
    name: el.name || '',
    created_at: el.created_at ? format(el.created_at, 'dd MMM yyyy (HH:mm:ss)') :  '',
    updated_at: el.updated_at ? format(el.updated_at, 'dd MMM yyyy (HH:mm:ss)') :  '',
    schedules: (
        <ul>
            {el.schedules.map((schedule) => (
                <li key={schedule.id}>
                    {schedule.day}, {schedule.open_time} - {schedule.close_time}
                </li>
            ))}
        </ul>
    )
}))

type NormalizedRestaurants = ReturnType<typeof restaurantsNormalizer>;

export { type NormalizedRestaurants, restaurantsNormalizer };
