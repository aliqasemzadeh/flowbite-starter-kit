# Flowbite Components for Laravel

## Checkbox Component

The checkbox component provides a customizable checkbox input with support for different colors and states.

### Basic Usage

```blade
<x-flowbite.checkbox 
    id="my-checkbox" 
    label="Check me" 
/>
```

### Available Properties

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| id | string | 'checkbox' | The ID of the checkbox |
| label | string | 'Checkbox' | The label text |
| checked | boolean | false | Whether the checkbox is checked |
| disabled | boolean | false | Whether the checkbox is disabled |
| color | string | 'blue' | The color of the checkbox (blue, red, green, yellow, purple, pink, etc.) |
| value | string | '' | The value of the checkbox |
| name | string | '' | The name of the checkbox |
| class | string | '' | Additional classes for the checkbox |

### Examples

#### Different Colors

```blade
<x-flowbite.checkbox id="checkbox-blue" label="Blue Checkbox" color="blue" />
<x-flowbite.checkbox id="checkbox-red" label="Red Checkbox" color="red" />
<x-flowbite.checkbox id="checkbox-green" label="Green Checkbox" color="green" />
```

#### Checked State

```blade
<x-flowbite.checkbox id="checked-checkbox" label="Checked Checkbox" checked />
```

#### Disabled State

```blade
<x-flowbite.checkbox id="disabled-checkbox" label="Disabled Checkbox" disabled />
```

#### Disabled and Checked

```blade
<x-flowbite.checkbox id="disabled-checked" label="Disabled Checked" disabled checked />
```

#### Custom Classes

```blade
<x-flowbite.checkbox 
    id="custom-class" 
    label="Larger Checkbox" 
    class="h-6 w-6" 
/>
```

### Demo Page

A demo page is available at `/checkbox-demo` (requires authentication) that showcases all the available options and combinations.
