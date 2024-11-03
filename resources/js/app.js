import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Tooltip, initTWE ,Collapse} from "tw-elements";
initTWE({ Collapse });
initTWE({ Tooltip });
