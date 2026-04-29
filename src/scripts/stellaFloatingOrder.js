import React, { useEffect, useState } from "react"

const logoUrl = "/wp-content/uploads/2026/04/Stella_Principal_tagline-scaled.png"

export default function StellaFloatingOrder() {
  const [isVisible, setIsVisible] = useState(false)

  useEffect(() => {
    const showTimer = setTimeout(() => {
      setIsVisible(true)
    }, 900)

    return () => clearTimeout(showTimer)
  }, [])

  const handleClick = (e) => {
    const target = document.querySelector("#order-delivery")

    if (!target) return

    e.preventDefault()

    const wpAdminBar = document.getElementById("wpadminbar")
    const adminBarHeight = wpAdminBar ? wpAdminBar.offsetHeight : 0
    const navOffset = window.innerWidth >= 1024 ? 104 : 86

    const top =
      target.getBoundingClientRect().top +
      window.pageYOffset -
      adminBarHeight -
      navOffset -
      10

    window.scrollTo({
      top,
      behavior: "smooth",
    })
  }

  return (
    <div className={`st-floating-order ${isVisible ? "is-visible" : ""}`}>
      <a
        href="#order-delivery"
        className="st-floating-order__card"
        onClick={handleClick}
        aria-label="Order Stella Pastry and Cafe"
      >
        <span className="st-floating-order__logo">
          <img src={logoUrl} alt="" aria-hidden="true" />
        </span>

        <span className="st-floating-order__copy">
          <strong>Stella Pastry &amp; Cafe</strong>
          <small>Order delivery or pickup</small>
        </span>

        <span className="st-floating-order__btn">
          Order now
        </span>
      </a>
    </div>
  )
}