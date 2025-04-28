export type Restaurants = Restaurant[]

export type Restaurant = {
    id: number
    name: string
    created_at: string
    updated_at: string
    schedules: Schedule[]
}

export interface Schedule {
    id: number
    restaurant_id: number
    day: string
    open_time: string
    close_time: string
    created_at: string
    updated_at: string
}
