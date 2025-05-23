import * as React from 'react';

import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"

interface InputWithLabelProps extends React.ComponentProps<"input">{
    label: string;
}

export default function InputWithLabel(props: InputWithLabelProps) {
    const { label, id, ...inputProps } = props;
    return (
        <div className="grid w-full max-w-sm items-center gap-1.5">
            <Label htmlFor={id}>{label}</Label>
            <Input id={id} {...inputProps} />
        </div>
    )
}
