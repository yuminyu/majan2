import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js";

// 日本語設定、今日以降選択、30日間
flatpickr("#eventDate", { 
    locale : Japanese, 
    minDate: "today",
    maxDate: new Date().fp_incr(30)
});

// 時間表示、カレンダー非表示、24時間表記
const setting = {
    "locale" : Japanese,
    enableTime: true, 
    noCalendar: true, 
    dateFormat: "H:i", 
    time_24hr: true,
    minTime: "10:00",
    maxTime: "20:00"
}
flatpickr("#startTime", setting);
flatpickr("#endTime", setting); 