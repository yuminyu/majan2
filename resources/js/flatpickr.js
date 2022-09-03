import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js";

// 日本語設定、今日以降選択、30日間
flatpickr("#eventDate", { 
    locale : Japanese, 
    minDate: "today",
    maxDate: new Date().fp_incr(30)
});

flatpickr("#calendar", { 
    locale : Japanese, 
    //minDate: "today",
    maxDate: new Date().fp_incr(30)
});

// 時間表示、カレンダー非表示、24時間表記
const start_setting = {
    "locale" : Japanese,
    enableTime: true, 
    noCalendar: true, 
    dateFormat: "H:i", 
    time_24hr: true,
    minTime: "10:00",
    maxTime: "19:00",
    minuteIncrement:"60"
}

const end_setting = {
    "locale" : Japanese,
    enableTime: true, 
    noCalendar: true, 
    dateFormat: "H:i", 
    time_24hr: true,
    minTime: "11:00",
    maxTime: "20:00",
    minuteIncrement:"60"
}

flatpickr("#startTime", start_setting);
flatpickr("#endTime", end_setting); 