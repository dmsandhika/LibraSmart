import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Tooltip, initTWE ,Collapse, Dropdown,
  Ripple, Input, Modal} from "tw-elements";
initTWE({ Collapse , Tooltip, Input , Dropdown, Ripple , Modal});
