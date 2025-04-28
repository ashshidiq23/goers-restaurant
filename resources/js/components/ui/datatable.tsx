import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import type { TableColumn } from '@/types/tables';

interface DataTableProps<T> {
    data: T[];
    columns: Array<TableColumn<Extract<keyof T, string>>>;
    loading?: boolean;
}

const DataTable = <T extends Record<string, unknown>>(props: DataTableProps<T>) =>  {
    const {
        columns = [],
        data,
        loading = false,
    } = props;

    return (
        <Table>
            <TableHeader>
                <TableRow>
                    {columns.map((column) => (
                        <TableHead key={column.dataKey} className={column.className}>
                            {column.name}
                        </TableHead>
                    ))}
                </TableRow>
            </TableHeader>
            <TableBody>
                {data.length > 0 ? data.map((row, index) => (
                    <TableRow key={index}>
                        {columns.map((column) => (
                            <TableCell key={column.dataKey} className={column.className}>
                                <>
                                    {(!column.dataType || column.dataType === 'string') && (
                                        <span className={column.className}>
                                      {String(row[column.dataKey])}
                                    </span>
                                    )}
                                    {column.dataType === 'element' && row[column.dataKey]}
                                </>
                            </TableCell>
                        ))}
                    </TableRow>
                )): (
                    <TableRow>
                        <TableCell colSpan={columns.length} className="text-center">
                            {loading ? 'Loading...' : 'No data available'}
                        </TableCell>
                    </TableRow>
                )}
            </TableBody>
        </Table>
    );
};

export default DataTable;
