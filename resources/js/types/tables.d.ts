export type TableColumn<T extends string = string> = {
  name: string;
  dataKey: T;
  className?: string;
  width?: number;
  dataType?: 'string' | 'element';
}
